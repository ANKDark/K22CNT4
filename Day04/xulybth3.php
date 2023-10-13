<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>::FIBONACI::</title>
</head>
<body>
    <?php
    // Bước 1: Lấy dữ liệu nhập trên form
    $N = $_POST['txtn'];

    // Bước 2: Thực hiện tính và hiển thị dãy Fibonacci
    echo "Dãy Fibonacci <= $N:<br>";
    $a = $b = 1;
    $c = $a + $b;
    echo "$a, $b, ";

    while ($c <= $N) {
        echo $c . ", ";
        $a = $b;
        $b = $c;
        $c = $a + $b;
    }
    ?>
</body>
</html>