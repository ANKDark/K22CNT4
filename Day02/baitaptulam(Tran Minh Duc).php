<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập tự làm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            text-transform: uppercase;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Nhập thông tin sản phẩm</h1>
    <form name="tt" action="xulybttulam.php" method="POST">
        <div class="form-group">
            <label for="maSP">Mã sản phẩm:</label>
            <input type="number" name="maSP" id="maSP">
        </div>
        <div class="form-group">
            <label for="TenSP">Tên sản phẩm:</label>
            <input type="text" name="TenSP" id="TenSP">
        </div>
        <div class="form-group">
            <label for="motaSP">Mô tả sản phẩm:</label>
            <input type="text" name="motaSP" id="motaSP">
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng:</label>
            <input type="number" name="soluong" id="soluong">
        </div>
        <div class="form-group">
            <label for="dongia">Đơn giá:</label>
            <input type="number" name="dongia" id="dongia">
        </div>
        <div class="form-group">
            <label for="loai">Loại:</label>
            <input type="text" name="loai" id="loai">
        </div>
        <input type="submit" name="Ghilai" value="Ghi lại">
    </form>
</body>
</html>