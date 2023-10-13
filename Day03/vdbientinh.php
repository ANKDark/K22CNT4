<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ biến tĩnh</title>
</head>
<body>
    <?php
        function Dem () {
            static $x = 0;
            echo $x;
            $x++;
            if ($x < 10) {
                Dem();
            }
        }
        Dem();
    ?>
</body>
</html>