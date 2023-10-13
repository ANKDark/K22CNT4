<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ biến cục bộ</title>
</head>
<body>
    <?php
        echo "Kết quả của phép nhân 14 * 15=";
        function Tinh_nhan() {
            $x = 14;
            $y = 15;
            $z = $x * $y;
            echo $z;
        }
        Tinh_nhan();
        //echo $z;
    ?>
</body>
</html>