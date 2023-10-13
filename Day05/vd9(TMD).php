<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 9</title>
</head>
<body>
    <?php 
        $mang = array(2, 3, 5, 7, 11);
        echo "Mảng giá trị:<br>";
        while($m=each($mang)) {
            echo "Chỉ số:".$m['key']."; Giá trị:".$m['value'];
            echo"<br>";
        }
    ?>
</body>
</html>