<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tin sinh viên - Trần Minh Đức</title>
</head>
<body>
    <?php 
        if(isset($_POST["btnSubmit_TMD"])) {
            // 1. Kết nối
            include("ketnoi_tmd.php");
            // 2. Lấy thông tin trên form
            $MASV_TMD = $_POST["MASV_TMD"];
            $HOTEN_TMD = $_POST["HOTEN_TMD"];
            $NGAYSINH_TMD = $_POST["NGAYSINH_TMD"];
            $GIOITINH_TMD = $_POST["GIOITINH_TMD"];
            $MAKHOA_TMD = $_POST["MAKHOA_TMD"];
            $ANH_TMD = $_POST["ANH_TMD"];
            // 3. Tạo truy vấn thêm mới
            $sql_tmd = "INSERT INTO `sinhvien_tmd` (`MASV_TMD`, `HOTEN_TMD`, `NGAYSINH_TMD`, `GIOITINH_TMD`, `MAKHOA_TMD`, `ANH_TMD`) VALUES ('$MASV_TMD', '$HOTEN_TMD', '$NGAYSINH_TMD', '$GIOITINH_TMD', '$MAKHOA_TMD', '$ANH_TMD');";
            if ($conn_tmd->query($sql_tmd)) {
                header("Location: sinhvien-list-tmd.php");
            }else {
                echo "Lỗi thêm mới: " . mysqli_error($conn_tmd);
            }
        }
    ?>
    <h1>Thêm mới thông tin sinh viên - Trần Minh Đức</h1>
    <hr>
    <form action="" name="frm_tmd" method="post">
        <table border="1px" width="100%" cellspacing="0"> 
            <tr>
                <td>Mã sinh viên:</td>
                <td>
                    <input type="text" name="MASV_TMD" id="MASV_TMD">
                </td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td>
                    <input type="text" name="HOTEN_TMD" id="HOTEN_TMD">
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td>
                    <input type="text" name="NGAYSINH_TMD" id="NGAYSINH_TMD">
                </td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="GIOITINH_TMD" id="NAM_TMD" value="1">
                    <label for="NAM_TMD">Nam</label>
                    <input type="radio" name="GIOITINH_TMD" id="NU_TMD" value="0">
                    <label for="NU_TMD">Nữ</label>
                </td>
            </tr>
            <tr>
                <td>Mã khoa:</td>
                <td>
                    <select name="MAKHOA_TMD" id="MAKHOA_TMD">
                        <option value="CNT">Khoa CNTT</option>
                        <option value="QTH">Khoa Quốc tế</option>
                        <option value="KTO">Khoa Kế toán</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ảnh:</td>
                <td>
                    <input type="file" name="ANH_TMD" id="ANH_TMD">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnSubmit_TMD" value="Thêm -TMD">
                    <input type="reset" name="btnReset_TMD" value="Làm lại - TMD">
                </td>
            </tr>
        </table>
        <p><?php echo isset($error)? $error : ''; ?></p>
    </form>
</body>
</html>