<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng số điện thoại</title>
</head>
<body>
    <?php 
        $dienthoai = $_POST['dienthoai-tmd'];
        $tong = 0;
        $dienthoai_chuoi = (string) $dienthoai;
        for ($i = 0; $i < strlen($dienthoai_chuoi); $i++) {
            echo "$dienthoai_chuoi[$i] <br>";
            $tong += $i;
        }
        echo "<br>Tổng: $tong";
    ?>
</body>
</html>