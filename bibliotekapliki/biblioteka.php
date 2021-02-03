<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>biblioteka</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        Maciek Dziendziel 
    </div>
        <div class=nav>
        <div class="item colorBlue">
     <a class="link a" href="https://github.com/SK-2019/php-sql-wprowadzenie-maciej-dziendziel" >GITHUB</a>
            <a class="link b" href="/index.php">Index</a>
            <a class="link c" href="/pracownicy/pracownicy.php">Pracownicy</a>
            <a class="link d" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="link e" href="/funkcje/Funkcje Agreugjące.php">Funkcje agregujące</a>
            <a class="link f" href="/inne/dataczas.php">Data i Czas</a>
            <a class="link g" href="formularz.html">Formularz</a>
            <a class="link h" href="/formularze/daneDoBazy.php">DaneDoBazy</a>
            <a class="link i" href="/bibliotekapliki/ksiazki.php">Książki</a>



</div>
<div class="item colorGreen">
<?php

require("connect.php");
$sql = ('SELECT * FROM bibliotekaAutor');
echo("<h2>Autorzy</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
        echo("</tr>");
    

    }

    echo("</table>");

require("connect.php");
$sql = ('SELECT * FROM bibliotekaTytuł');
echo("<h2>Tytuły</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
        echo("</tr>");
    

    }

    echo("</table>");

require("connect.php");
$sql = ('SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` WHERE id_autor = bibliotekaAutor_ID AND id_tytuł = bibliotekaTytul_ID');
echo("<h2>Dane w Bibliotece</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");
    

    }

    echo("</table>");


?>
 </div>   
</body>
</html>
