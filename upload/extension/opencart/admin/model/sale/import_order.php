<?php
namespace Opencart\Admin\Model\Extension\Opencart\Sale;

class ImportOrder extends \Opencart\System\Engine\Model {

	public function importFile(string $file_path, string $extension, int $default_order_status_id): array {
		$result = [
			'success' => false,
			'total_rows' => 0,
			'orders_created' => 0,
			'products_created' => 0,
			'errors' => []
		];

		try {
			$rows = $this->readFile($file_path, $extension);

			if (!$rows) {
				$result['errors'][] = 'File rỗng hoặc không đọc được';
				return $result;
			}

			$result['total_rows'] = count($rows);

			$header = array_map(fn($v) => strtolower(trim($v)), $rows[0]);
			if (!$this->validateHeader($header)) {
				$result['errors'][] = 'Header không hợp lệ';
				return $result;
			}

			array_shift($rows);
			$orders = $this->groupOrdersByCode($rows, $header);

			foreach ($orders as $order_code => $order_rows) {
				$res = $this->processOrder($order_rows, $header, $order_code, $default_order_status_id);

				if ($res['success']) {
					$result['orders_created']++;
					$result['products_created'] += $res['products_created'];
				} else {
					$result['errors'] = array_merge($result['errors'], $res['errors']);
				}
			}

			$result['success'] = true;
		} catch (\Throwable $e) {
			$result['errors'][] = $e->getMessage();
			$this->log->write('[ImportOrder] ' . $e->getMessage());
		}

		return $result;
	}

	private function readFile(string $file_path, string $extension): array {
		$rows = [];

		if ($extension === 'csv') {
			if (($handle = fopen($file_path, 'r')) === false) {
				return [];
			}

			$bom = fread($handle, 3);
			if ($bom !== "\xEF\xBB\xBF") {
				rewind($handle);
			}

			while (($data = fgetcsv($handle, 0, ',')) !== false) {
				$rows[] = $data;
			}
			fclose($handle);
		}

		if ($extension === 'xlsx') {
			if (!class_exists('\PhpOffice\PhpSpreadsheet\IOFactory')) {
				throw new \Exception('Thiếu PhpSpreadsheet');
			}

			$sheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_path)->getActiveSheet();
			foreach ($sheet->toArray() as $row) {
				$rows[] = $row;
			}
		}

		return $rows;
	}

	private function validateHeader(array $header): bool {
		$required = ['order_code', 'product_name', 'quantity', 'price'];
		foreach ($required as $col) {
			if (!in_array($col, $header, true)) {
				return false;
			}
		}
		return true;
	}

	private function groupOrdersByCode(array $rows, array $header): array {
		$orders = [];
		$idx = array_search('order_code', $header, true);

		foreach ($rows as $i => $row) {
			if (!isset($row[$idx])) continue;
			$code = trim($row[$idx]);
			if ($code === '') continue;

			$orders[$code][] = [
				'row_num' => $i + 2,
				'data' => $row
			];
		}
		return $orders;
	}

	private function processOrder(array $order_rows, array $header, string $order_code, int $default_status): array {
		$result = ['success' => false, 'products_created' => 0, 'errors' => []];

		$this->db->query('START TRANSACTION');

		try {
			$cols = $this->getColumnIndexes($header);
			$first = $order_rows[0]['data'];

			if (empty($first[$cols['order_code']])) {
				throw new \Exception("Đơn {$order_code}: thiếu order_code");
			}

			$customer_id = $this->processCustomer(
				$first[$cols['customer_name']] ?? 'Khách lẻ',
				$first[$cols['customer_phone']] ?? ''
			);

			$order_status_id = $this->getOrderStatusId(
				$first[$cols['order_status']] ?? '',
				$default_status
			);

			$products = [];
			$total = 0;
			$subtotal = 0;

			foreach ($order_rows as $row) {
				$r = $row['data'];
				$q = (int)$r[$cols['quantity']];
				$p = (float)$r[$cols['price']];

				if ($q <= 0) continue;

				$product = $this->processProduct($r[$cols['product_name']], $p);
				if ($product['created']) $result['products_created']++;

				$line = $q * $p;
				$total += $line;
				$subtotal += $line;

				$products[] = [
					'product_id' => $product['product_id'],
					'name' => $r[$cols['product_name']],
					'model' => $product['model'],
					'quantity' => $q,
					'price' => $p,
					'total' => $line
				];
			}

			if (!$products) {
				throw new \Exception("Đơn {$order_code}: không có sản phẩm hợp lệ");
			}

			$this->createOrder([
				'order_code' => $order_code,
				'order_date' => date('Y-m-d'),
				'customer_id' => $customer_id,
				'customer_name' => $first[$cols['customer_name']] ?? 'Khách lẻ',
				'customer_phone' => $first[$cols['customer_phone']] ?? '',
				'payment_method' => $first[$cols['payment_method']] ?? 'Cash',
				'order_status_id' => $order_status_id,
				'total' => $total,
				'subtotal' => $subtotal,
				'order_products' => $products
			]);

			$this->db->query('COMMIT');
			$result['success'] = true;

		} catch (\Throwable $e) {
			$this->db->query('ROLLBACK');
			$result['errors'][] = $e->getMessage();
			$this->log->write('[ImportOrder] ' . $e->getMessage());
		}

		return $result;
	}

	private function getColumnIndexes(array $header): array {
		$cols = ['order_code','order_date','customer_name','customer_phone','product_name','quantity','price','payment_method','order_status'];
		$out = [];
		foreach ($cols as $c) {
			$out[$c] = array_search($c, $header, true);
		}
		return $out;
	}

	private function processCustomer(string $name, string $phone): int {
		if (!$phone || stripos($name, 'khách') !== false) return 0;

		$q = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE telephone='" . $this->db->escape($phone) . "' LIMIT 1");
		if ($q->num_rows) return (int)$q->row['customer_id'];

		$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET
			customer_group_id=1, store_id=0,
			firstname='" . $this->db->escape($name) . "',
			lastname='', email='',
			telephone='" . $this->db->escape($phone) . "',
			password='', status=1, date_added=NOW()");

		return (int)$this->db->getLastId();
	}

	private function processProduct(string $name, float $price): array {
		$q = $this->db->query("SELECT p.product_id,p.model FROM " . DB_PREFIX . "product p
			JOIN " . DB_PREFIX . "product_description pd ON p.product_id=pd.product_id
			WHERE pd.name='" . $this->db->escape($name) . "' AND pd.language_id=" . (int)$this->config->get('config_language_id') . " LIMIT 1");

		if ($q->num_rows) {
			return ['product_id' => (int)$q->row['product_id'], 'model' => $q->row['model'], 'created' => false];
		}

		$model = 'IMPORT-' . substr(md5($name), 0, 8);
		$this->db->query("INSERT INTO " . DB_PREFIX . "product SET model='" . $this->db->escape($model) . "', price='" . (float)$price . "', status=1, date_added=NOW()");
		$id = (int)$this->db->getLastId();

		$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id={$id}, language_id=" . (int)$this->config->get('config_language_id') . ", name='" . $this->db->escape($name) . "', meta_title='" . $this->db->escape($name) . "'");

		return ['product_id' => $id, 'model' => $model, 'created' => true];
	}

	private function getOrderStatusId(string $text, int $default): int {
		if (!$text) return $default;

		$q = $this->db->query("SELECT order_status_id FROM " . DB_PREFIX . "order_status
			WHERE LOWER(name) LIKE '%" . $this->db->escape(strtolower($text)) . "%'
			AND language_id=" . (int)$this->config->get('config_language_id') . " LIMIT 1");

		return $q->num_rows ? (int)$q->row['order_status_id'] : $default;
	}

	private function createOrder(array $d): int {
		$this->db->query("INSERT INTO " . DB_PREFIX . "order SET
			invoice_prefix='IMP-',
			store_id=0,
			store_name='" . $this->db->escape($this->config->get('config_name')) . "',
			store_url='" . $this->db->escape($this->config->get('config_url')) . "',
			customer_id=" . (int)$d['customer_id'] . ",
			firstname='" . $this->db->escape($d['customer_name']) . "',
			telephone='" . $this->db->escape($d['customer_phone']) . "',
			payment_method='" . $this->db->escape($d['payment_method']) . "',
			total='" . (float)$d['total'] . "',
			order_status_id=" . (int)$d['order_status_id'] . ",
			date_added=NOW()");

		$order_id = (int)$this->db->getLastId();

		foreach ($d['order_products'] as $p) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "order_product SET
				order_id={$order_id},
				product_id={$p['product_id']},
				name='" . $this->db->escape($p['name']) . "',
				model='" . $this->db->escape($p['model']) . "',
				quantity={$p['quantity']},
				price='{$p['price']}',
				total='{$p['total']}'");
		}

		return $order_id;
	}
}
