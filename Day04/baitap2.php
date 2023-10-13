<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tự làm 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="xulybai2.php" name="forml" method="post">
        <table>
            <tr>
                <td>Nhập số tự nhiên a</td>
                <td><input type="number" name="nba" id="nba"></td>
            </tr>
            <tr>
                <td>Nhập số tự nhiên b</td>
                <td><input type="number" name="nbb" id="nbb"></td>
            </tr>
            <tr>
                <td>Nhập số tự nhiên c</td>
                <td><input type="number" name="nbc" id="nbc"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" id="button" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>