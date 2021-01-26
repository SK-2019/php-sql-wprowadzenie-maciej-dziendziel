<?php
echo("<h1>jestes w delete.php </h1>");
echo "<li>".$_POST['id'];

require_once("connect.php");
//definiujemy zapytanie $sql
$sql = "DELETE  FROM pracownicy WHERE id_pracownicy= '".$_POST['id']."';";

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<h2>Record deleted successfully</h2>");
  header('Location: daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location:http://127.0.0.1/maciek/danedobazy.php");
?>
