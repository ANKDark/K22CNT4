<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý</title>
</head>
<body>
    <?php 
        $a = $_POST['nba'];
        $b = $_POST['nbb'];
        $c = $_POST['nbc'];
        $max = max($a, $b, $c);
        $min = min($a, $b, $c);
        echo "<p>Số lớn nhất: $max</p>";
        echo "<p>Số nhỏ nhất: $min</p>";
    ?>
</body>
</html>