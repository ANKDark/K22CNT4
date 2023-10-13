<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 6</title>
</head>
<body>
    <?php 
        $mang = array(10, 20, 30, 40, 50);
        foreach($mang as $giaitri) {
            echo $giaitri.", ";
        }
        echo "<br>__________________________<br>";
        foreach($mang as $chiso => $giaitri) {
            echo "mang[$chiso]=".$giaitri."<br>";
        }
    ?>
</body>
</html>