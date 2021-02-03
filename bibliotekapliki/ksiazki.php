<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<div class="container">
    <div class="item colorRed">
        <h1 class="title">Maciek Dziendziel</h1>
    </div>
    <div class="nav">
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
        <div class="item a">
<?php
require_once("connect.php");
$sql ="Select * From biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id";
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>autor</th>");
echo("<th>tytul</th>");

            
while($row=$result->fetch_assoc()) {
    echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>
        <td>
        <form action='delete_bibl.php' method='POST'>
        <input type='number' name='id' value='".$row['id']."' hidden></br>
        <input type='submit' value='Usuń'>
        </form></td>");
    echo("</tr>");
}

echo("</table>");

?>
</div>
</div>
