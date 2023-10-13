<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["btnSubmit"])){
        $name = $_POST["name"];
        $age = $_POST["age"];
        echo "<h2> Xin chào: $name; Tuổi: $age</h2>";
    }
    ?>
    <form action="" method="post">
        <div>
            Họ và tên 
            <input type="text" name="name" id="name">
        </div>
        <div>
            Tuổi
            <input type="number" name="age" id="age">
        </div>
        <input type="submit" name="btnSubmit" id="btnSubmit">
    </form>
</body>
</html>