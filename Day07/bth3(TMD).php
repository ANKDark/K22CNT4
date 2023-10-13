<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::bth3: Các hàm thao tác với ngày/ giờ...::</title>
</head>
<body>
    <?php 
        // Thiết lập vùng giờ mặc định
        date_default_timezone_set('Asia/Tokyo');
        // Thiết lập định dạng ngày giờ
        $today = date("G:i a");
        // in ra màn hình
        echo "Bây giờ là:".$today;
        echo ",ngày".date("d-m-Y");
    ?>
</body>
</html>