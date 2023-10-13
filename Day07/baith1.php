<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $gt = $_POST["txtSo"]; // Lấy giá trị từ form
        echo "Căn 2 của $gt=".sqrt($gt);
        echo "<br> $gt mũ $gt=".pow($gt,$gt);
        echo "<br> Giá trj lớn nhất của 100 và $gt là:".max(100,$gt);
        echo "<br> Giá trj nhỏ nhất của 125 và $gt là:".max(125,$gt);
    ?>
</body>
</html>