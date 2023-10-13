<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 3</title>
</head>
<body>
    <?php 
        $countries = array("Europs" => array("de","uk"),"North America" => array("ca","cr","us"));
        echo $countries ["Europs"][1];
        echo "".$countries ["North America"][1];
    ?>
</body>
</html>