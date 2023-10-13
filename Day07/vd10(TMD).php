<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 10</title>
</head>
<body>
    <?php 
        function Hoan_vi(&$a, &$b) //Khai báo hàm
        {
            $tam = $a;
            $a = $b;
            $b = $tam;
        }
        $x = 5; $y = 7;
        echo "Giá trị ban đầu x = $x; y = $y";
        Hoan_vi($x, $y);
        echo "<br> Sau khi hoán vị x = $x; y = $y";
    ?>
</body>
</html>