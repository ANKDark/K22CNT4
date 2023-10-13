<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 8</title>
</head>
<body>
    <?php 
        // In dãy các số tự nhiên <= 10
        $x = 0;
        do {
            echo "$x";
            if ($x < 10) {
                echo ", ";
            }
            $x++;
        } while ($x <= 10);
    ?>
</body>
</html>