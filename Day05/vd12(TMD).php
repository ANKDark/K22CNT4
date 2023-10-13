<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 12</title>
</head>
<body>
<?php
$countries = array("de", "uk", "ca", "cr", "us");
echo "Mảng ban đầu:<br>";
while (list($chiso, $giatri) = each($countries)) {
    echo $giatri . ", ";
}
sort($countries);
echo "<br>Mảng sắp tăng dần hàm sort():<br>";
foreach ($countries as $giatri) {
    echo $giatri . ", ";
}

?>
</body>
</html>