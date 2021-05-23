<?php 
    $local = "localhost";
    $admin = "root";
    $pass = "";
    $db_name = "mafajiuh";

    $conn = mysqli_connect($local,$admin,$pass,$db_name);
    mysqli_set_charset($conn,'utf8');
?>