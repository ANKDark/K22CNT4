<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 4 ( Giải phương trình ax + b = 0, sử dụng cấu trúc if lồng nhau)</title>
</head>
<body>
    <?php 
        // Giải phương trình ax + b = 0
        $a = 0; $b = 0; // Giả sử
        if ($a == 0) {
            if ($b != 0){
                echo "Phương trình ${a}x + $b = 0 vô nghiệm";
            }else {
                echo "Phương trình ${a}x + $b = 0 vô số nghiệm";
            }
        }else {
            echo "Nghiệm phương trình ${a}x + $b = 0 là x = -$b / $a";
        }
    ?>
</body>
</html>