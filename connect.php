<?php
    $conn= new mysqli($_SERVER['TIUNIO'],$_SERVER['NIMO'],$_SERVER['NIUNIO'],$_SERVER['NAMO']);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }
?>
