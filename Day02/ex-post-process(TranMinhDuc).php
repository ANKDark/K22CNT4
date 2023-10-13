<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lí dữ liệu</title>
</head>
<body>
<?php 
    if(isset($_POST['btGui'])){
        $hoVaTen = $_POST['hoVaTen'];
        $maSV = $_POST['maSV'];
        $tuoi = $_POST['tuoi'];
        $noiSinh = $_POST['noiSinh'];

        echo '<h2>Thông tin sinh viên</h2>';
        echo "<p>Họ và tên: $hoVaTen</p>";
        echo "<p>Mã sinh viên: $maSV</p>";
        echo "<p>Tuổi: $tuoi</p>";
        echo "<p>Nơi Sinh: $noiSinh</p>";
    }
?>
</body>
</html>