<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 1</title>
</head>
<body>
    <?php 
        $x = 100;
        if ($x > 10) {
            $y = $x + 10;
            echo $y;
        }
        if ($x > 120) {
            echo "$x không lớn hơn 120";
        }
    ?>
</body>
</html>