<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 7</title>
</head>
<body>
    <?php 
        $mang = array(2,3,5,7,11);
        echo "Mảng giá trị ban đầu:";
        foreach($mang as $giaitri) {
            echo "".$giaitri.", ";
        }
        foreach($mang as &$giaitri) {
            $giaitri *= $giaitri;
        }
        echo "<br>Mảng sau khi tính bình phương:";
        foreach($mang as &$giaitri) {
            echo " ".$giaitri.", ";
        }
    ?>
</body>
</html>