<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 5</title>
</head>
<body>
    <?php 
        $mang = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
        for ($i = 0; $i < 10; $i++) {
            echo $mang[$i] . ", ";
        }
        echo "<br>_________________________________<br>";
        for ($i = 0; $i < sizeof($mang); $i++) {
            echo $mang[$i] . "&nbsp;&nbsp;  ";
        }
    ?>
</body>
</html>