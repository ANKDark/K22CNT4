<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ biến toàn cục</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 2;
        function Tinh_tong () {
            global $a, $b; // Khai báo sử dụng biến toàn cục
            $b = $a + $b;
        }

        Tinh_tong();
        echo $b;
    ?>
</body>
</html>