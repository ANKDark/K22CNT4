<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 5</title>
</head>
<body>
    <?php 
        $thu = 2;
        switch($thu)
        {
            case 1:
                echo "Hôm nay là chủ nhật";
                break;
            case 2:
                echo "Hôm nay là thứ hai";
                break; 
            case 3:
                echo "Hôm nay là thứ ba";
                break;
            case 4:
                echo "Hôm nay là thứ tư";
                break;
            case 5:
                echo "Hôm nay là thứ năm";
                break;
            case 6:
                echo "Hôm nay là thứ sáu";
                break;
            case 7:
                echo "Hôm nay là thứ bảy";
                break;
            default:
            echo "Không phải ngày thứ trong tuần";    
        }
    ?>
</body>
</html>