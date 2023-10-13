<?php 
    $conn_tmd = new mysqli("localhost","root","","ql_diem_tmd");
    if (!$conn_tmd) {
        echo "Lỗi - ".mysqli_error($conn_tmd);
    }
?>