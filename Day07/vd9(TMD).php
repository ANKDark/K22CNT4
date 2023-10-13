<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 9</title>
</head>
<body>
    <?php 
            function Tinh_tong($x, $y) //Khai báo hàm
            {
                $a = $x*$y;
                return $a;
            }
            $kq = Tinh_tong(5,10); 
            echo "Tổng: $kq";
    ?>
</body>
</html>