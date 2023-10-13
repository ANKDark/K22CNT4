<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD12</title>
</head>
<body>
    <?php
        echo empty($bien_moi);  //true;
        $bien_moi = 1;
        echo empty($bien_moi);  //false;
        $bien_moi = "";
        echo empty($bien_moi);  //true;
        $bien_moi = 0;
        echo empty($bien_moi);  //true;
        $bien_moi = "Số 223";
        echo empty($bien_moi);  //flase;
        unset($bien_moi);
        echo empty($bien_moi);  //true;
    ?>
</body>
</html>