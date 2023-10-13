<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD15</title>
</head>
<body>
<?php
        $x = 5;
        $y = 3;
        $z = ($x == $y);
        echo "<br>".$x."==".$y."=".(int)$z; // So sánh bằng
        $z = ($x > $y);
        echo "<br>".$x.">".$y."=".(int)$z; // Só sánh lớn hơn
        $z = ($x < $y);
        echo "<br>".$x."<".$y."=".(int)$z; // So sánh nhỏ hơn
        $z = ($x >= $y);
        echo "<br>".$x.">=".$y."=".(int)$z; // Lớn hơn hoặc bằng
        $z = ($x <= $y);
        echo "<br>".$x."<=".$y."=".(int)$z; // Nhỏ hơn hoặc bằng
        $z = ($x != $y);
        echo "<br>".$x."!=".$y."=".(int)$z; // So sánh không bằng
        $z = ($x <> $y);
        echo "<br>".$x."<>".$y."=".(int)$z; // So sánh không bằng
    ?>
</body>
</html>