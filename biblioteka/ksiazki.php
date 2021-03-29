<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maciej Dziendziel 2ti gr1</title>
    <link rel="stylesheet" href="/assets/style.css">
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/2/27/Bliss_%28Windows_XP%29.png">
    </head>
    <body>
    <div class="pole">
                <div class="naglowek">
                <h1>Maciej Dziendziel</h1>
                </div>
    <div class="nav">
        <a class="menu" href="https://github.com/SK-2019/php-sql-wprowadzenie-maciej-dziendziel" >GITHUB</a>
        <a class="menu" href="/index.php">Index</a>
        <a class="menu" href="/pracownicy/pracownicy.php">Pracownicy</a>
        <a class="menu" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
        <a class="menu" href="/funkcje/Funkcje Agreugjące.php">Funkcje agregujące</a>
        <a class="menu" href="/dataczas.php">Data i Czas</a>
        <a class="menu" href="/formularz.html">Formularz</a>
        <a class="menu" href="/formularze/daneDoBazy.php">DaneDoBazy</a>
        <a class="menu" href="/bibliotekapliki/ksiazki.php">Książki</a>
        <a class="menu" href="/flexbox.html">flexbox</a>
    </div>
        <div class="tresc">
        <?php
require_once("../connect.php");
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
</body>
</html>
