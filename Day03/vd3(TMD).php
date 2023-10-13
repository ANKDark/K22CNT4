<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD3</title>
</head>
<body>
    <?php 
        define("COMPANY", "Phop's Bicycles");
        define("YELLOW", "#FFFF00");
        define("VERSION", 8);
        define("NL", "<BR>\n");
        echo "Employment at " . COMPANY . NL;
        if (defined("YELLOW")) {
            echo "<BODY BGCOLOR=" . YELLOW . ">\n";
        }
    ?>
</body>
</html>