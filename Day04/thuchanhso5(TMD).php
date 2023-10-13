<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::Vòng lặp, lệnh nhảy::</title>
</head>
<body>
    <?php
    //Thuật toán Fibonacci
    $a = $b = 1;
    $c = $a + $b;
    $tong = $a + $b + $c;

    echo "<h2>Dãy <u>10</u> số Fibonacci đầu tiên:</h2>";
    echo "<b>$a + $b + $c ";

    $dem = 3;

    while (true) {
        $a = $b;
        $b = $c;
        $c = $a + $b;
        $tong += $c;

        if ($dem++ == 10) {
            break;
        }

        echo "+ $c ";
    }

    echo "= $tong";
    ?>
</body>
</html>