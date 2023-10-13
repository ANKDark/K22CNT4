<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::Sắp xếp mảng (rsort())...::</title>
</head>
<body>
    <?php
        // Khai báo mảng
        $countries = array("de", "uk", "ca", "cr", "us");
        echo "Mảng ban đầu:<hr>";

        while (list($chiso, $giatri) = each($countries)) {
            echo $giatri . "; ";
        }

        rsort($countries);
        echo "<br>Mảng sắp giảm dần hàm rsort();<br>";
        foreach ($countries as $giatri) {
            echo $giatri . ", ";
        }
    ?>
</body>
</html>