<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Lệnh continue...::</title>
</head>
<body>
    <?php 
        // In ra màn hình dãy số nguyên từ 0 - 10
        // Không in số 5
        for ($x = 0 ; $x <= 10; $x++) {
            if ($x == 5) {
                continue;
            }
            echo "$x, ";
        }
    ?>
</body>
</html>