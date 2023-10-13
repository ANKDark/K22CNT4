<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $gt = $_POST["txtChuoi"];
        echo "Hàm chr(65) =".chr(65);
        echo "<br> Hàm strtolower(\"$gt\")=".strtolower($gt);
        echo "<br> Hàm strtoupper(\"$gt\")=".strtoupper($gt);
        echo "<br> Hàm strrev(\"$gt\")=".strrev($gt);
        echo "<br> Hàm strlen(\"$gt\")=".strlen($gt);
        echo "<br> Hàm strstr(\"$gt\",\"Ac\")=".strstr($gt, "Ac");
        echo "<br> Hàm str_replace(\"Academy\",\".edu.vn\",\"$gt\")=".str_replace("Academy",".edu.vn",$gt);
    ?>
</body>
</html>