<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 8</title>
</head>
<body>
    
    <?php 
    /*
       $mang = array(2,3,5,7,11);
       echo "Mảng giá trị:<br>";
       while(list($chiso,$giaitri) = each($mang)) {
        echo "Mang[$chiso] = $giaitri <br>";
       }
       */
    // Sửa lại
        $mang = array(2, 3, 5, 7, 11);
       echo "Mảng giá trị:<br>";
       foreach ($mang as $chiso => $giaitri) {
           echo "Mang[$chiso] = $giaitri <br>";
       }
    ?>
    
</body>
</html>