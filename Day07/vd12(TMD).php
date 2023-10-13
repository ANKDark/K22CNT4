<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 12</title>
</head>
<body>
    <?php 
        function HRA($Lcb) {
            return 2.75 * $Lcb;
        }
        function TA($Lcb) {
            return 2.0 * $Lcb;
        }function TAX($Lcb) {
            return 0.5 * $Lcb;
        }function Salary($Lcb) {
            $A = HRA($Lcb);
            $B = TA($Lcb);
            $C = TAX($Lcb);
            $D = $A + $B - $C;
            return $D;
        }
        $luong_co_ban = 50000;
        $LTN = Salary($luong_co_ban);
        echo "Lương thực nhận (cơ bản $luong_co_ban): $LTN";
    ?>
</body>
</html>