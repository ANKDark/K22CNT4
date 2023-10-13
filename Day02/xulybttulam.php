<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý</title>
</head>
<body>
    <?php 
        $maSP=$_POST['maSP'];
        $TenSP=$_POST['TenSP'];
        $motaSP=$_POST['motaSP'];
        $soluong=$_POST['soluong'];
        $dongia=$_POST['dongia'];
        $loai=$_POST['loai'];
        echo "<p>Mã sản phẩm</p>".$maSP;
        echo "<p>Tến sản phẩm</p>".$TenSP;
        echo "<p>Mô tả sản phẩm</p>".$motaSP;
        echo "<p>Số lượng</p>".$soluong;
        echo "<p>Đơn giá</p>".$dongia;
        echo "<p>Loại</p>".$loai;
    ?>
</body>
</html>