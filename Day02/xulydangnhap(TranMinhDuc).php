<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý đăng nhập hệ thống</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendn = $_POST['taikhoan'];
    $mkhau = $_POST['matkhau'];

    echo "(Sử dụng POST) - Xin chào, <h2>$tendn</h2>";
    echo "Nhập mật khẩu của bạn: $mkhau";
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $tendn = $_GET['taikhoan'];
    $mkhau = $_GET['matkhau'];

    echo "(Sử dụng GET) - Xin chào, <h2>$tendn</h2>";
    echo "Mật khẩu của bạn: $mkhau";
}
?>
</body>
</html>