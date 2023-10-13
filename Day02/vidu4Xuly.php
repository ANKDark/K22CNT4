<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--Welcome to PHP--</title>
</head>
<body>
    <?php 
        /* 
        Lấy giá trị từ from
        Bằng POST
        */
        $hoten=$_POST['ten'];
        $tuoi=$_POST['tuoi'];

        //In lên trình duyệt
        echo "<h1>Họ tên:".$hoten;
        echo "<h2>Tuổi:".$tuoi;
    ?>
</body>
</html>