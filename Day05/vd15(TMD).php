<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD 15</title>
</head>
<body>
    <?php
        $quocgia = array(
            "c" => "Germany",
            "a" => "United Kingdom",
            "d" => "Canada",
            "b" => "Costa Rica",
            "e" => "United States"
        );

        echo "<u>Mảng ban đầu:</u><br>";
        while (list($chiso, $giatri) = each($quocgia)) {
            echo $chiso . "=>" . $giatri . "<br>";
        }

        ksort($quocgia);
        echo "<u>Mảng sắp giảm dần hàm ksort():</u><br>";
        while (list($chiso, $giatri) = each($quocgia)) {
            echo $chiso . "=>" . $giatri . "<br>";
        }

    ?>
</body>
</html>