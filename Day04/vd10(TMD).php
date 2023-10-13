<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Lệnh break......::</title>
</head>
<body>
    <?php 
        //In ra màn hình dãy số nguyên
        for ($x = 0 ; $x <= 10 ; $x++) {
            if ($x > 5) {
                break; // Thoát ra khỏi vòng lặp for
            }
            echo "$x, ";
        }
    ?>
</body>
</html>