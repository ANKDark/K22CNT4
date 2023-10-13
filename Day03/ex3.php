<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép toán, biểu thức, câu lệnh, khối lệnh</title>
</head>
<body>
    <h1>Phép toán, biểu thức, câu lệnh, khối lệnh</h1>
    <?php
        // Phép toán: Số học, nhị phân, logic, so sánh,....
        $a = 100;
        $b = 200;
        // Các phép toán số học
        $c = $a + $b;
        echo "<p>$a + $b = $c</p>";
        $c = $a - $b;
        echo "<p>$a - $b = $c</p>";
        $c = $a * $b;
        echo "<p>$a * $b = $c</p>";
        $c = $a / $b;
        echo "<p>$a / $b = $c</p>";
        $c = $a % $b;
        echo "<p>$a % $b = $c</p>";

        // Phép toán so sánh => true/false (1/0)
        $c = $a > $b;
        echo "<p>$a > $b = $c</p>";
        $c = $a < $b;
        echo "<p>$a < $b = $c</p>";

        // &&, ||, !
        $c = ($a % 2 == 0 && $a < $b);
        echo "<p>$a % 2 == 0 && $a < $b => $c</p>";
        $c = ($a % 2== 0 || $a < $b);
        echo "<p>$a % 2 == 0 || $a < $b => $c</p>";

        // Khối lệnh
        {
            $x = "NTU- Đại học Nguyễn Trãi";
            print_r("<p></p>");
            print_r("$x");
        }
        function display($name) {
            echo "<h2> Welcome to, $name</h2>";
        }
        display("Trần Minh Đức");
        display("Class - K22CNT4");
    ?>
</body>
</html>