<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD11</title>
</head>
<body>
    <?php
        $id = "112aa";
        if(isset($id))
        {
            echo "Biến đã được gắn dữ liệu";
        }else {
            echo "Biến chưa được gắn dữ liệu";
        }
        unset($id);
        if(!isset($id)) { echo "<br>Dữ liệu đã được giải phóng"; }
    ?>
</body>
</html>