<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biến, hằng số, kiểu dữ liệu </title>
</head>
<body>
    <h1>Biến, hằng số, kiểu dữ liệu</h1>
    <?php
    // mã lệnh php
    // 1. Hằng số:
    define("PI",3.1415); //định nghĩa hằng
    // Sử dụng hằng số:
    echo "<p> Hằng PI = ".PI;

    //2. Biến: khai báo, gán giá trị và sử dụng biến
    $a = 123455; // Biến kiểu số nguyên
    echo "<p>Biến nguyên a= $a</p>";
    $b = 123.45; // Biến kiểu số thực
    echo "<p>Biến số thực b = $b</p>";

    $x = true; // Biến kiểu logic (1/0)
    echo "<p>Biến logic: $x</p>";

    $name = 'Trần Đức';// Biến kiểu chuỗi
    echo "<p>Biến kiểu chuỗi: $name</p>";

    //3. Kiểu dữ liệu: số, chuỗi, logic, ngày giờ
    echo "<p>type(a) =</p>".gettype($a);
    echo "<p>type(b) =</p>".gettype($b);
    echo "<p>type(x) =</p>".gettype($x);
    echo "<p>type(name) =</p>".gettype($name);
    $arr = array(1, 2, 3, 4);
    echo "<p>type(arr)</p>". gettype($arr);
    ?>
</body>
</html>