<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách môn học - Trần Minh Đức</title>
</head>
<body>
    <?php 
        // 1. Kết nối
        include("ketnoi_tmd.php");
        // 2. Tạo truy vấn đọc dữ liệu
        $sql_tmd = "SELECT * FROM MONHOC_TMD where 1=1";
        //3. Thực thi câu lệnh truy vấn
        $result_tmd = $conn_tmd->query($sql_tmd);
        // 4. Duyệt và hiển thị
    
    ?>
    <section>
        <h1>Danh sách môn học - Trần Minh Đức</h1>
        <a href="monhoc-them-tmd.php">Thêm mới</a>
        <hr>
        <table border="1" width="80%" cellspacing="0">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Môn học</td>
                    <td>Tên môn học</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stt_tmd = 0;
                    while ($row_tmd = $result_tmd->fetch_array()):
                        $stt_tmd++;
                    
                ?>
                <tr>
                    <td><?php echo $stt_tmd; ?></td>
                    <td><?php echo $row_tmd["MAMH_TMD"]; ?></td>
                    <td><?php echo $row_tmd["TENMH_TMD"]; ?></td>
                <?php 
                    endwhile;
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>