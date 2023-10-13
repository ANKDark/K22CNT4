<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 11</title>
</head>
<body>
    <?php 
        function Tinh_luong($BacLuong = 2.45) // Khai báo hàm
        {
            return 1250000 * $BacLuong;
        }
        echo "Lương T.V.A=".Tinh_luong(); //in ra: Lương T.V.A = 3062500
        echo "<br>Lương T.T.H =".Tinh_luong(2.5);
        //In ra: Lương T.T.H = 3125000
    ?>
</body>
</html>