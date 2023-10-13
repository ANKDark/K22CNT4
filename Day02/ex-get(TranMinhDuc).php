<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý dữ liệu với method=GET</title>
</head>
<body>
    <h1>Xử lý dữ liệu với method=GET</h1>
    <form name="frm" action="ex-get-process.php" method="GET">
        <div>
            <label for="hoVaTen">Họ và tên sinh viên:</label>
            <input type="text" name="hoVaTen" id="hoVaTen">
        </div>
        <div>
            <label for="maSV">Mã sinh viên:</label>
            <input type="number" name="maSV" id="maSV">
        </div>
        <div>
            <label for="tuoi">Tuổi:</label>
            <input type="number" name="tuoi" id="tuoi">
        </div>
        <div>
            <label for="noiSinh">Nơi sinh</label>
            <select name="noiSinh" id="noiSinh">
                <option value="">--Chọn nơi sinh--</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Điện Biên">Điện Biên</option>
            </select>
        </div>
        <input type="submit" name="btGui" value="Gửi đi">
    </form>
</body>
</html>