<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 10</title>
</head>
<body>
    <?php 
        $sanpham = array (
            array ("ITL", "INTEL","HARD"),
            array ("MIR","MICROSOFT","SOFT"),
            array ("PHP", "PHPVN.ORG", "TUTORIAL")
        );
        for ($dong = 0; $dong <sizeof($sanpham);$dong++) {
            for ($cot = 0; $cot <sizeof($sanpham);$cot++) {
                echo $sanpham[$dong][$cot]." | ";
            }
            echo "<br>";
        }

    ?>
</body>
</html>