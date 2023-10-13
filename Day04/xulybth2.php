<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Phân loại học viên::</title>
</head>
<body>
    <?php 
        $thang = $_POST['txtthang'];
        $nam = $_POST['txtnam'];
        $Songay = 0;
        switch($thang) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $Songay =31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $Songay = 30;
                break;
            case 2:
                if ($nam % 4 == 0 && $nam % 400 !=0) {
                    $Songay = 29;
                }else {
                    $Songay = 28;
                }
                break;
            default:
                echo "Dữ liệu nhập sai";
        }
        if($Songay > 0) {
            echo "<h2>tháng $thang, năm $nam có $Songay ngày!</h2>";
        }
    ?>
</body>
</html>