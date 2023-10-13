<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Phương trình bậc 2::</title>
</head>
<body>
    <?php 
        // Lấy dữ liệu nhập trên form
        $a = $_POST['txta'];
        $b = $_POST['txtb'];
        $c = $_POST['txtc'];
        // Thực hiện giải phương trình bậc 2
        if ($a == 0) //Chuyển về giải phương trình bậc nhất
        {
            if ($b == 0) {
                if ($c == 0) { echo "Phương trình có vô số nghiệm";
                }else {
                echo "Phương trình vô nghiệm";
                }
            }else {
            echo "Phương trình có nghiệm x = $c/$b";
            }
        }else {
            // Trường hợp ($a <> 0) giải pt bậc 2
            // Tính delta = b*b-4*a*c
            $delta = $b*$b-4*$a*$c;
            if($delta > 0) //Phương trình có 2 nghiệm
            {
                $x1 = (-$b+sqrt($delta)) / (2*$a);
                $x2 = (-$b-sqrt($delta)) / (2*$a);
                echo "<b>Nghiệm trong phương trình:</b>";
                echo "<br>x1 = $x1";
                echo "<br>x2 = $x2";
            }elseif ($delta == 0) {
                $x = -$b/(2*$a);
                echo "<p>Phương trình có nghiệm kép x1 = x2 = $x</p>";
            }else {
                echo "Phương trình vô nghiệm";
            }
        }
    ?>
</body>
</html>