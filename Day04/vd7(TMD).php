<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 7</title>
</head>
<body>
    <?php 
        // In ra mà hình tổng các số nguyên <=10
        $x = 0; $tong = 0;
        echo "<i>Tổng: </i><b></b>";
        while ($x <= 10) {
            if ($x < 10) {
                echo "$x +";
            }else {
                echo "$x =";
            }
            $tong += $x;
            $x++; // Tăng biến lặp
        }
        echo "$tong"
    ?>
</body>
</html>