<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD16</title>
</head>
<body>
    <?php
        $Ho_dem="Nguyễn Thành";
        $Ten = "Long";
        //$Ho_ten= $Ho_dem." ".$Ten; //$Ho_ten = "Nguyễn Thành Long"
        echo "Họ và tên: ${Ho_dem}${Ten}";
        echo "<br> Hoặc Họ và tên: $Ho_dem      $Ten";
    ?>
</body>
</html>