<?php
    $conn= new mysqli("mysql-mlodychopak.alwaysdata.net","218113","maciek!123","mlodychopak_db");
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>
