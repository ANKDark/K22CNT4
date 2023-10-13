<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Các toán tử::</title>
</head>
<body>
    <?php
        $x = 5;
        $y = 3;
        $z = $x + $y;
        echo "<br>".$x."+".$y."=".$z; // Phép cộng
        $z = $x - $y;
        echo "<br>".$x."-".$y."=".$z; // Phép trừ
        $z = $x * $y;
        echo "<br>".$x."*".$y."=".$z; // Phép nhân
        $z = $x / $y;
        echo "<br>".$x."/".$y."=".$z; // Phép chia
        $z = $x % $y;
        echo "<br>".$x."%".$y."=".$z; // Phép chia lấy dư
    ?>
</body>
</html>