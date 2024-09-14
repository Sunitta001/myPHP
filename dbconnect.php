<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "books_001";
    $dbcon = mysqli_connect($host,$username,$password,$dbname);
    if(!$dbcon) {
        echo"ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";
        exit();
    }
    mysqli_query($dbcon,"SET NAMES 'utf8'");

?>