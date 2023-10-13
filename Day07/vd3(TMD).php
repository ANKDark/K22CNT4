<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 3</title>
</head>
<body>
    <?php 
        $tg = getdate();
        $ngay = $tg['mday'];
        $thang = $tg['mon'];
        $nam = $tg['year'];
        echo "Hôm nay, ngày $ngay tháng $thang năm $nam.";
    ?>
</body>
</html>