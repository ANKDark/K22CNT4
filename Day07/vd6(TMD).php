<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 6</title>
</head>
<body>
    <?php 
        if ($variable = true) {
            include("vidu4a.php");
        }else {
            include "vidu4b.php";
        }
    ?>
</body>
</html>