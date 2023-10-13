<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 11</title>
</head>
<body>
<?php
$countries = array(
    "Europs" => array("de", "uk"),
    "North America" => array("ca", "cr", "us")
);
foreach ($countries as $chiso1 => $array) {
    echo $chiso1 . ":<br>";
    while (list($chiso2, $giatri) = each($array)) {
        echo $giatri . "<br>";
    }
}
?>
</body>
</html>