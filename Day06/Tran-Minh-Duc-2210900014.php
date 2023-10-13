<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trần Minh Đức - 2210900014</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-wrapper {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .bang {
            border-collapse: collapse;
            width: 100%;
        }
        
        .bang td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <form action="tranminhduc_2210900014_xuly.php" name="frm_tranminhduc_2210900014" method="post">
                <table class="bang">
                    <tr>
                        <td>Mã sinh viên:</td>
                        <td><input type="text" name="tmd_2210900014"></td>
                    </tr>
                    <tr>
                        <td>Họ và tên:</td>
                        <td><input type="text" name="tmd_name"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh:</td>
                        <td><input type="date" name="tmd_24_07_2004"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><input type="number" name="tmd_0855312279"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ mail:</td>
                        <td><input type="text" name="tmd_dinhhoangducdbp2004"></td>
                    </tr>
                    <tr>
                        <td>Tên lớp:</td>
                        <td>
                            <select name="tmd_K22CNT">
                                <option value="K22CNT1">K22CNT1</option>
                                <option value="K22CNT2">K22CNT2</option>
                                <option value="K22CNT3">K22CNT3</option>
                                <option value="K22CNT4">K22CNT4</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Trần Minh Đức" name="tmd_submit">
                        </td>
                    </tr>
                </table>
            </form>

            <form action="tranminhduc_2210900014_xuly.php" name="frm2_tranminhduc_2210900014" method="post">
                <table class="bang">
                    <tr>
                        <td>Nhập số điện thoại:</td>
                        <td><input type="number" name="tmd_0855312279"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="tmd_submit_frm2" value="Trần Minh Đức">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>