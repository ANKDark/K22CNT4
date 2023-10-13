<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD10</title>
</head>
<body>
    <?php
        $a = 8.5;
        settype ($a, "integer");
        if (settype ($a, "array"))
        {
            echo "Ép kiểu thành công";
        }else {
            echo "Ép kiểu không thành công";

        }
    ?>
</body>
</html>