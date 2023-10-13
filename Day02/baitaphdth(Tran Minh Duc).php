<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Đăng nhập hệ thống</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            width: 500px;
            margin: 0 auto;
        }

        table {
            border: 1px solid #009966;
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #009966;
            color: #fff;
            font-weight: bold;
        }

        td {
            border-bottom: 1px solid #009966;
        }

        .center {
            text-align: center;
        }

        .logo {
            width: 150px;
            height: 142px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            margin-right: 10px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 200px;
            padding: 5px;
        }

        .form-group input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-actions {
            text-align: right;
            margin-top: 15px;
        }

        .form-actions input[type="submit"],
        .form-actions input[type="reset"] {
            padding: 5px 10px;
            background-color: #009966;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form-actions input[type="reset"] {
            background-color: #ccc;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="xulydangnhap(TranMinhDuc).php" method="post" name="dangnhap">
        <table>
            <tr>
                <th colspan="3">Thông tin đăng nhập của khách hàng</th>
            </tr>
            <tr>
                <td class="center" rowspan="4">
                    <img src="kimages.jpg" alt="Logo" class="logo">
                </td>
                <td>
                    <label for="taikhoan">Tài khoản:</label>
                    <input type="text" name="taikhoan" id="taikhoan">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="matkhau">Mật khẩu:</label>
                    <input type="password" name="matkhau" id="matkhau">
                </td>
            </tr>
            <tr>
                <td>
                    <input name="cbGhinho" type="checkbox" id="cbGhinho">
                    <label for="cbGhinho">Ghi nhớ</label>
                </td>
            </tr>
            <tr>
                <td class="form-actions">
                    <input type="submit" name="button" id="button" value="Đăng nhập">
                    <input type="reset" name="button2" id="button2" value="Nhập lại">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>