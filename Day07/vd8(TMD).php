<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 8</title>
</head>
<body>
    <?php 
        function Binh_phuong($x) //Khai báo hàm
        {
            $a = $x*$x;
            return $a;
        }
        $kq = Binh_phuong(5); // GỌi hàm và truyền tham trị là 5
        echo "Bình phương của 5 là: $kq"; //in ra: Bình phương của 5 là: 25
    ?>
</body>
</html>