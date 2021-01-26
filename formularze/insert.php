<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
require_once("connect.php");
$sql =  "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (NULL,'".$_POST['imie']."','".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_']."')";
echo($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location:http://127.0.0.1/maciek/daneDoBazy.php");
?>