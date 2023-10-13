<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Lấy giá trj trên form
        $a = $_POST['txtA'];
        $b = $_POST['txtB'];
        echo "Số a = $a; b = $b";
        //Hàm tìm giá trị lớn nhất, nhỏ nhất
        function LN_NN(&$x,&$y) {
            $ln = ($x > $y)?$x:$y;
            $nn = ($x > $y)?$y:$x;

            $x = $ln;
            $y = $nn;
        }
        LN_NN($a,$b);
        echo "<br>Số lớn: $a";
        echo "<br>Số nhỏ: $b";
        // Hàm kiểm tra số chính phương
        function Kt_cp($x){
            for($i = $x;$i < $y; $i++) {
                if (Kt_cp($i) == 1)
                echo $i.", ";
            }
        }
        echo "<p>Các số chính phương trong khoảng [$b -> $a]:<b></b></p>"
        ln($b,$a);
    ?>
</body>
</html>