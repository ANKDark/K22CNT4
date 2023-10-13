<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên - 2210900014</title>
</head>
<style>
        body {
            background-color: wheat;
            margin: 1rem 3rem;
            padding: 1rem;
        }
        form {
            background-color: whitesmoke;
            width: 60%;
            padding: 2rem;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #6499E9;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-groupp {
            padding-top: 2rem;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #0C356A;
        }
        .tmd-control {
            width: 100%;
            padding: 0.5rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .cl-tmd {
            border: 1px solid #333;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            border-radius: 4px;
        }
        .cll:hover {
            background-color: #F6F4EB;
            color: #272829;
            cursor: pointer;
        }
        .cl:hover {
            background-color: #F6F4EB;
            color: #272829;
            cursor: pointer;
        }
        .cl {
            color: #313866;
        }
        .cll {
            margin-top: 1.5rem;
            width: 200px;
            height: 35px;
        } 

    </style>
<body>
    <form action="tran-minh-duc-2210900014-info.php" method="post">
        <h1>Thông tin sinh viên - 2210900014</h1>
        <div class="form-group">
            <label for="masv-tmd">Mã sinh viên: </label>
            <input type="text" name="masv-tmd" id="masv-tmd" class="tmd-control">
        </div>
        <div class="form-group">
            <label for="hoten-tmd">Họ tên: </label>
            <input type="text" name="hoten-tmd" id="hoten-tmd" class="tmd-control">
        </div>
        <div class="form-group">
            <label for="ngaysinh-tmd">Ngày sinh: </label>
            <input type="date" name="ngaysinh-tmd" id="ngaysinh-tmd" class="tmd-control">
        </div>
        <div class="form-group">
            <label for="dienthoai-tmd">Điện thoại: </label>
            <input type="number" name="dienthoai-tmd" id="dienthoai-tmd" class="tmd-control">
        </div>
        <div class="form-group">
            <label for="lop-tmd">Lớp: </label>
            <select name="lop-tmd" id="lop-tmd">
                <option value="K22CNT1">K22CNT1</option>
                <option value="K22CNT2">K22CNT2</option>
                <option value="K22CNT3">K22CNT3</option>
                <option value="K22CNT4">K22CNT4</option>
            </select>
        </div>
        <div>
            <label for=""></label>
            <input type="submit" name="Submit-tmd" id="Submit-tmd" value="Submit- Trần Minh Đức" class="cl">
            <input type="reset" name="Reset-tmd" id="Reset-tmd" value="Reset- Trần Minh Đức" class="cl">
        </div>
    </form>
    <form action="tran-minh-duc-2210900014-data.php" method="post">
        <div class="form-groupp">
            <label for="dienthoai-tmd">Điện thoại: </label>
            <input type="number" name="dienthoai-tmd" id="dienthoai-tmd" class="tmd-control">
            <input type="submit" name="Submit-tmd" id="Submit-tmd" value="Submit- Trần Minh Đức" class="cll">
            <label for=""></label>
        </div>
    </form>
</body>
</html>