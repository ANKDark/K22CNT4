<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_POST["tmd_submit"])) {
            $masv = $_POST["tmd_2210900014"] ?? "";
            $hoten = $_POST["tmd_name"] ?? "";
            $ngsinh = $_POST["tmd_24_07_2004"] ?? "";
            $sdt = $_POST["tmd_0855312279"] ?? "";
            $diachimail = $_POST["tmd_dinhhoangducdbp2004"] ?? "";
            $tenlop = $_POST["tmd_K22CNT"] ?? "";

            echo "<p>Mã sinh viên: $masv</p>";
            echo "<h1>Họ và tên: $hoten</h1>";
            echo "<p>Ngày sinh: $ngsinh</p>";
            echo "<p>Điện thoại: $sdt</p>";
            echo "<p>Địa chỉ mail: $diachimail</p>";
            echo "<p>Tên lớp: $tenlop</p>";
        }

        if (isset($_POST["tmd_submit_frm2"])) {
            $sdt_frm2 = $_POST["tmd_0855312279"] ?? "";
            $tong = 0;
            $chuso_chan = array();
            $sodt_arr = str_split($sdt_frm2);
            foreach ($sodt_arr as $sodt) {
                if (is_numeric($sodt) && $sodt % 2 == 0) {
                    $chuso_chan[] = $sodt;
                    $tong += $sodt;
                }
            }
            $chuso_chan_string = implode(" + ", $chuso_chan);
            echo "<h3>Tổng các chữ số chẵn trong dãy số điện thoại $sdt_frm2 là: $chuso_chan_string = $tong</h3>";
        }
    ?>
</body>
</html>