<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = $_POST['nba'];
        $b = $_POST['nbb'];
        $c = $_POST['nbc'];
        if ($a + $b > $c && $b + $c > $a && $c + $a > $b) {
            echo "Ba số tự nhiên $a, $b, $c tạo thành ba cạnh của một tam giác: <br>";
        
            if ($a === $b && $b === $c) {
                echo " Tam giác đều.";
            } elseif ($a === $b || $b === $c || $c === $a) {
                if ($a * $a + $b * $b === $c * $c || $b * $b + $c * $c === $a * $a || $c * $c + $a * $a === $b * $b) {
                    echo " Tam giác vuông cân";
                } else {
                    echo " Tam giác cân";
                }
            } else {
                if ($a * $a + $b * $b === $c * $c || $b * $b + $c * $c === $a * $a || $c * $c + $a * $a === $b * $b) {
                    echo " Tam giác vuông";
                } else {
                    echo " Tam giác thường";
                }
            }
        } else {
            echo "Ba số tự nhiên $a, $b, $c không tạo thành ba cạnh của một tam giác.";
        }
    ?>
</body>
</html>