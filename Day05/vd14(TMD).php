<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::Sắp xếp mảng (asort())...::</title>
</head>
<body>
    <?php
        // Khai báo mảng
        $quocgia = array(
            "de" => "Germany",
            "us" => "United States",
            "uk" => "United Kingdom",
            "ca" => "Canada",
            "cr" => "Costa Rica"
        );

        echo "<u>Mảng ban đầu:</u><br>";
        while (list($chiso, $giatri) = each($quocgia)) {
            echo $chiso . "=>" . $giatri . "<br>";
        }

        asort($quocgia);
        echo "<u>Mảng sắp tăng dần hàm asort():</u><br>";
        while (list($chiso, $giatri) = each($quocgia)) {
            echo $chiso . "=>" . $giatri . "<br>";
        }
    ?>
</body>
</html>