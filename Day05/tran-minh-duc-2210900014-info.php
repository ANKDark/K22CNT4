<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả: Thông tin sinh viên - Trần Minh Đức - 2210900014</title>
</head>
<body>
    <h1>Kết quả: Thông tin sinh viên - Trần Minh Đức - 2210900014</h1>
    <?php 
        $masv = $_POST['masv-tmd'];
        $hoten = $_POST['hoten-tmd'];
        $ngaysinh = $_POST['ngaysinh-tmd'];
        $dienthoai = $_POST['dienthoai-tmd'];
        $lop = $_POST['lop-tmd'];

        echo "<h3>Mã sinh viên: $masv <br>";    
        echo "<h3>Mã sinh viên: $hoten <br>";    
        echo "<h3>Mã sinh viên: $ngaysinh <br>";    
        echo "<h3>Mã sinh viên: $dienthoai <br>";    
        echo "<h3>Mã sinh viên: $lop";    
    ?>
</body>
</html>