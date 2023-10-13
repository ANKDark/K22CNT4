<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 6</title>
</head>
<body>
    <?php 
        // In ra mà hình dãy số nguyên nhỏ hơn 10
        $x = 0;
        echo "<i>Dãy các số nguyên < 10: </i><b>";
        while ($x < 10) {
            echo "$x, ";
            $x++; // Tăng biến lặp
        }
    ?>
</body>
</html>