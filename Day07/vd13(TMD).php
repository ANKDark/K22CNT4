<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 13</title>
</head>
<body>
    <?php 
        function GiaiThuat($n)
        {
            if($n <= 1)
            {
                return 1;
            }else {
                return $n * GiaiThuat($n -1);
            }
        }
        echo "Giai thừa của 5 =";
        $gt = GiaiThuat(5);
        echo $gt;
    ?>
</body>
</html>