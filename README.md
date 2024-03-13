# Lưu ý
- Khi copy LP không cần copy trang 404 theo, vì có lỗi nó sẽ lấy 404 của web gốc hoặc có chuyển hướng thì chuyển hướng về 404 trang gốc
- Thư mục `.mailer` luôn phải đặt ở thư mục gốc của website. Các trang LP không cần copy thư mục này vì nó được requrired từ thư mục gốc.

File: /form/send/index.php
```php
require_once $_SERVER['DOCUMENT_ROOT'] . "/.mailer/mailer.php";
```
- Cấu hình email và subject vào file /form/send/config.json 
Có thể gửi file này cho xếp để báo cáo

- Cấu hình nội dung email admin vào file /form/send/message_admin.txt
Có thể gửi file này cho xếp để báo cáo

- Cấu hình nội dung email admin vào file /form/send/message_customer.txt
Có thể gửi file này cho xếp để báo cáo

- Gửi mail
```php
  send_email($subject, $body, $to, $reply = null, $bcc = null, $photos = []);
```

- Upload file
```php 
uploadFile('filename');
```
