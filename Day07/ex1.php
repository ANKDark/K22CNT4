<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm hệ thống</title>
</head>
<body>
    <h1>Hàm hệ thống</h1>
    <?php 
        echo "<h2>Hàm số học</h2>";
        $num = -123;
        echo "<p>$num ;</p>".Abs($num);
        echo "<h2>Hàm xử lý chuỗi</h2>";
        $name = "Đại học Nguyễn Trãi";
        echo "<p></p>".strlen($name);
        echo "<p></p>".strtolower($name);
        echo "<p></p>".strtoupper($name);
        echo "<h2>Hàm ngày giờ</h2>";
        $date = getdate();
        print_r($date);

        $dd = $date["mday"];
        $mm = $date["mon"];
        $yy = $date["year"];
        echo "<br>Hôm nay là ngày $dd tháng $mm năm $yy";

    ?>
</body>
</html>