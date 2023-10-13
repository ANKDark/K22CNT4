<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::Vòng lặp::</title>
</head>
<body>
    <?php
    // Bước 1: Lấy dữ liệu nhập trên form
    $N = $_POST['txtn'];

    // Bước 2: Thực hiện tính và hiển thị tổng dãy số chẵn
    echo "Tổng dãy số chẵn < $N: ";
    $tong = 0;

    for ($i = 2; $i <= $N; $i += 2) {
        if ($i % 2 == 0 && $i + 2 <= $N) {
            echo $i . ", ";
        } else {
            echo $i;
        }
        $tong += $i;
    }

    echo " = " . $tong;
    ?>
</body>
</html>