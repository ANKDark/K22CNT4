<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 2</title>
</head>
<body>
    <?php 
        echo chr(65); echo "<br>"; //=>A
        echo strtolower("Function Php");echo "<br>"; //=>function php
        echo strtoupper("function Php");echo "<br>"; //=>FUNCTION PHP
        $str = "your customer service is excellent";
        echo substr_replace($str, "good.",25);
    ?>
</body>
</html>