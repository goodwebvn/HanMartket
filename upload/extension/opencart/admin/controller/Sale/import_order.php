<?php
namespace Opencart\Admin\Controller\Extension\Opencart\Sale;
/**
 * Class Import Order
 * 
 * Controller để import đơn hàng từ CSV/Excel
 * 
 * @package Opencart\Admin\Controller\Extension\Opencart\Sale
 */
class ImportOrder extends \Opencart\System\Engine\Controller {
	/**
	 * Index - Hiển thị form upload
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('extension/opencart/sale/import_order');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_sale'),
			'href' => $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/opencart/sale/import_order', 'user_token=' . $this->session->data['user_token'])
		];

		$data['user_token'] = $this->session->data['user_token'];

		// Load order statuses for dropdown
		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		// Default order status ID (usually first complete status or default)
		$data['default_order_status_id'] = $this->config->get('config_order_status_id');

		// Upload URL
		$data['upload'] = $this->url->link('extension/opencart/sale/import_order.upload', 'user_token=' . $this->session->data['user_token']);

		// Sample download URL
		$data['download_sample'] = $this->url->link('extension/opencart/sale/import_order.downloadSample', 'user_token=' . $this->session->data['user_token']);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/opencart/sale/import_order', $data));
	}

	/**
	 * Upload - Xử lý upload và import file
	 *
	 * @return void
	 */
	public function upload(): void {
		$this->load->language('extension/opencart/sale/import_order');

		$json = [];

		// Kiểm tra quyền
		if (!$this->user->hasPermission('modify', 'extension/opencart/sale/import_order')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Kiểm tra file upload
		if (!isset($this->request->files['file']) || empty($this->request->files['file']['tmp_name'])) {
			$json['error'] = $this->language->get('error_file_required');
		}

		if (!$json) {
			$file = $this->request->files['file'];
			$order_status_id = isset($this->request->post['order_status_id']) ? (int)$this->request->post['order_status_id'] : 0;

			// Validate file extension
			$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
			if (!in_array($extension, ['csv', 'xlsx'])) {
				$json['error'] = $this->language->get('error_file_format');
			}

			// Validate file size (max 10MB)
			if ($file['size'] > 10485760) {
				$json['error'] = $this->language->get('error_file_size');
			}
		}

		if (!$json) {
			// Load model
			$this->load->model('extension/opencart/sale/import_order');

			// Import file
			$result = $this->model_extension_opencart_sale_import_order->importFile($file['tmp_name'], $extension, $order_status_id);

			if ($result['success']) {
				$json['success'] = true;
				$json['message'] = $this->language->get('text_success_import');
				$json['statistics'] = [
					'total_rows' => $result['total_rows'],
					'orders_created' => $result['orders_created'],
					'products_created' => $result['products_created'],
					'errors' => $result['errors']
				];
			} else {
				$json['error'] = $result['error'];
				if (isset($result['errors']) && !empty($result['errors'])) {
					$json['errors'] = $result['errors'];
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Download Sample - Tải file mẫu CSV
	 *
	 * @return void
	 */
	public function downloadSample(): void {
		$this->load->language('extension/opencart/sale/import_order');

		// Kiểm tra quyền
		if (!$this->user->hasPermission('access', 'extension/opencart/sale/import_order')) {
			$this->response->redirect($this->url->link('error/permission', 'user_token=' . $this->session->data['user_token']));
			return;
		}

		// Tạo file CSV mẫu
		$filename = 'import_order_sample.csv';
		$csv_content = "\xEF\xBB\xBF"; // UTF-8 BOM for Excel
		$csv_content .= "order_code,order_date,customer_name,customer_phone,product_name,quantity,price,payment_method,order_status\n";
		$csv_content .= "HD001,2026-01-08,Nguyen Van A,0901234567,Thú bông Sin,1,80000,Cash,Complete\n";
		$csv_content .= "HD001,2026-01-08,Nguyen Van A,0901234567,Thú bông Kitty,1,120000,Cash,Complete\n";
		$csv_content .= "HD002,2026-01-08,Khách lẻ,,Vịt mũ bảo hiểm,2,100000,Cash,Complete\n";

		$this->response->addHeader('Content-Type: text/csv; charset=UTF-8');
		$this->response->addHeader('Content-Disposition: attachment; filename="' . $filename . '"');
		$this->response->addHeader('Content-Length: ' . strlen($csv_content));
		$this->response->setOutput($csv_content);
	}
}
