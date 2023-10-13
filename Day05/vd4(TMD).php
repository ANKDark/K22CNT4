<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 5</title>
</head>
<body>
    <?php 
        $i = 0; $j = 0;
        $arr = array();
        $arr [0] [0] = 10;
        $arr [0] [2] = 20;
        $arr [0] [3] = 30;
        $arr [0] [4] = 40;
        for ($i = 0 ; $i < sizeof($arr); $i++) {
            for ($j = 0 ; $j < sizeof($arr); $j++) {
                echo $arr[$i] [$j]. "&nbsp;&nbsp;  ";
            }
            echo "<br><br>";
        }
    ?>
</body>
</html>