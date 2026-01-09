# Extension Import Đơn Hàng OpenCart

## 📋 Mô tả
Extension cho phép import đơn hàng từ file CSV hoặc Excel (.xlsx) vào OpenCart admin.

## 📦 Cài đặt

### 1. Cài đặt PhpSpreadsheet (cho file Excel)
Nếu muốn import file Excel, cần cài đặt PhpSpreadsheet:
```bash
composer require phpoffice/phpspreadsheet
```

**Lưu ý:** Nếu không cài PhpSpreadsheet, chỉ có thể import file CSV.

### 2. Thêm menu vào Admin
Để thêm menu "Import đơn hàng" vào phần Bán hàng, cần chỉnh sửa file:
`upload/martket/controller/common/column_left.php`

Thêm vào phần Sales (khoảng dòng 336-371):

```php
if ($this->user->hasPermission('access', 'extension/opencart/sale/import_order')) {
    $sale[] = [
        'name'     => 'Import đơn hàng',
        'href'     => $this->url->link('extension/opencart/sale/import_order', 'user_token=' . $this->session->data['user_token']),
        'children' => []
    ];
}
```

### 3. Cấp quyền cho User Group
Vào: **System → Users → User Groups**

Chọn user group cần cấp quyền, thêm permission:
- `access`: `extension/opencart/sale/import_order`
- `modify`: `extension/opencart/sale/import_order`

## 🚀 Sử dụng

### 1. Truy cập
- Qua menu: **Bán hàng → Import đơn hàng**
- Hoặc trực tiếp: `admin/index.php?route=extension/opencart/sale/import_order&user_token=YOUR_TOKEN`

### 2. Format file CSV/Excel

File phải có các cột sau:

| Cột | Bắt buộc | Mô tả |
|-----|----------|-------|
| order_code | ✅ | Mã đơn hàng (duy nhất) |
| order_date | ❌ | Ngày đơn (YYYY-MM-DD), mặc định: hôm nay |
| customer_name | ❌ | Tên khách hàng, mặc định: "Khách lẻ" |
| customer_phone | ❌ | SĐT khách hàng (nếu có sẽ tìm/tạo mới) |
| product_name | ✅ | Tên sản phẩm (nếu không tồn tại sẽ tạo mới) |
| quantity | ✅ | Số lượng (phải > 0) |
| price | ✅ | Giá bán (>= 0) |
| payment_method | ❌ | Phương thức thanh toán, mặc định: "Cash" |
| order_status | ❌ | Trạng thái đơn hàng (dùng dropdown nếu không có) |

### 3. File mẫu

Có thể tải file mẫu CSV từ nút "Tải file mẫu" trên giao diện import.

Ví dụ dữ liệu:
```csv
order_code,order_date,customer_name,customer_phone,product_name,quantity,price,payment_method,order_status
HD001,2026-01-08,Nguyen Van A,0901234567,Thú bông Sin,1,80000,Cash,Complete
HD001,2026-01-08,Nguyen Van A,0901234567,Thú bông Kitty,1,120000,Cash,Complete
HD002,2026-01-08,Khách lẻ,,Vịt mũ bảo hiểm,2,100000,Cash,Complete
```

### 4. Import

1. Chọn file CSV hoặc Excel
2. Chọn trạng thái đơn hàng mặc định (nếu file không có cột order_status)
3. Click nút "Import"
4. Xem kết quả: Tổng dòng, Số đơn tạo, Số sản phẩm mới, Danh sách lỗi

## 🔄 Logic xử lý

### 1. Gom nhóm đơn hàng
- Các dòng có cùng `order_code` → 1 đơn hàng
- Mỗi dòng = 1 sản phẩm trong đơn

### 2. Xử lý khách hàng
- Nếu có `customer_phone`:
  - Tìm khách hàng theo phone
  - Không tìm thấy → Tạo mới
- Nếu không có phone hoặc tên là "Khách lẻ" → Dùng customer ID = 0 (guest)

### 3. Xử lý sản phẩm
- Tìm sản phẩm theo tên (theo ngôn ngữ hiện tại)
- Nếu không tồn tại → Tạo mới:
  - Model: `IMPORT-XXXXXXXX` (auto generate)
  - Price: Lấy từ file
  - Quantity: 0
  - Status: Enabled
  - Category: Category mặc định (nếu có)

### 4. Tạo đơn hàng
- Tổng tiền = SUM(price × quantity) của tất cả sản phẩm
- Trừ tồn kho nếu sản phẩm quản lý tồn (subtract = 1)
- Tạo order history với comment "Đơn hàng được import từ file"

### 5. Transaction Database
- Mỗi đơn hàng được xử lý trong transaction riêng
- Lỗi đơn hàng → Rollback đơn đó, không ảnh hưởng đơn khác
- Lỗi file → Không tạo đơn nào

## ⚠️ Lưu ý

1. **File size**: Tối đa 10MB
2. **File format**: CSV hoặc Excel (.xlsx)
3. **Encoding**: UTF-8 (khuyến nghị)
4. **CSV delimiter**: Dấu phẩy (,)
5. **Validation**: Dòng lỗi sẽ được bỏ qua và log vào danh sách lỗi
6. **Prefix bảng**: Sử dụng prefix từ config OpenCart (thường là `oc_`)

## 🐛 Xử lý lỗi

- Tất cả lỗi được log vào OpenCart error log
- Hiển thị chi tiết lỗi trong giao diện import
- Mỗi đơn hàng được xử lý độc lập, lỗi không ảnh hưởng lẫn nhau

## 📝 Changelog

### Version 1.0.0
- Import đơn hàng từ CSV
- Import đơn hàng từ Excel (cần PhpSpreadsheet)
- Tự động tạo khách hàng mới
- Tự động tạo sản phẩm mới
- Transaction database cho từng đơn hàng
- Validate và error handling đầy đủ
- Giao diện admin tiếng Việt

## 👨‍💻 Phát triển

- **Controller**: `admin/controller/sale/import_order.php`
- **Model**: `admin/model/sale/import_order.php`
- **View**: `admin/view/template/sale/import_order.twig`
- **Language**: `admin/language/vn-vi/sale/import_order.php`

## 📄 License

Extension này được phát triển theo yêu cầu riêng.
