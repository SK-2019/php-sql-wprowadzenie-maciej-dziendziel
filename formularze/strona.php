<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
<div class="formularz">
<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']); 

    ?>
    </div>
</body>
</html>
