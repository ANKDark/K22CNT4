<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc for.....::</title>
</head>
<body>
    <?php 
        // Cú pháp
        for ($x = 0; $x <= 10; $x++) {
            echo "$x";
            if ($x < 10) {
                echo ", ";
            }
        }
        //..............................
        echo "<br>";
        $x = 0;
        for ( ; $x <= 10; $x++) {
            echo "$x";
            if ($x < 10) {
                echo ", ";
            }
        }
        echo "<br>";
        $x = 0;
        for ( ; $x <= 10; ) {
            echo "$x";
            if ($x < 10) {
                echo ", ";
            }
            $x++;
        }
        echo "<br>";
        $x = 0;
        for ( ; ; ) {
            if ($x > 10) break;
            echo "$x";
            if ($x < 10) {
                echo ", ";
            }
            $x++;
        }
        echo "<br>";
        for ($x = 0, $j = 4; $x <= $j; $x++, $j--) {
            echo "i = $x, j = $j <br>";
        }
    ?>
</body>
</html>