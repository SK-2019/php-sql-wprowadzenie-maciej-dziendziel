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
        <a class="menu" href="index.php">Index</a>
        <a class="menu" href="/pracownicy/pracownicy.php">Pracownicy</a>
        <a class="menu" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
        <a class="menu" href="/funkcje/Funkcje Agreugjące.php">Funkcje agregujące</a>
        <a class="menu" href="dataczas.php">Data i Czas</a>
        <a class="menu" href="/formularz.html">Formularz</a>
        <a class="menu" href="/formularze/daneDoBazy.php">DaneDoBazy</a>
        <a class="menu" href="/bibliotekapliki/ksiazki.php">Książki</a>
        <a class="menu" href="flexbox.html">flexbox</a>
    </div>
        <div class="tresc">
        <?php
require_once("../connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org');
        echo("<h2>Pracownicy z nazwą działów</h2>");
         echo("<h3>".$sql."</h3>");
            $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");


$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=4)');
        echo("<h2>Pracownicy z nazwą działu 1 i 4</h2>");
         echo("<h3>".$sql."</h3>");
            $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");


$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a"');
        echo("<h2>Lista Kobiet z nazwami działów<h2>");
         echo("<h3>".$sql."</h3>");
            $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
    

$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie not like "%a"');
        echo("<h2>Lista mężczyzn z nazwami działów</h2>");
         echo("<h3>".$sql."</h3>");
            $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");



$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org order by imie desc');
echo("<h2>Pracownicy posortowani malejąco wg imienia<h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         } 
    echo("</table>");


$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=3 order by imie asc');
echo("<h2>Pracownicy z działu 3 posortowani rosnąco po imieniu</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a" order by imie asc');
echo("<h2>Kobiety posortowane rosnąco po imieniu</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
        
    echo("</table>");

$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=3) AND imie like "%a" order by zarobki asc');
echo("<h2>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }

    echo("</table>");

$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a" order by dzial asc, zarobki asc ');
echo("<h2>Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");



$sql = ("SELECT * FROM pracownicy, organizacja WHERE dzial=id_org and dzial=4 ORDER BY zarobki asc LIMIT 2");
echo("<h2>Najlepiej zarabiający z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");


$sql = ("SELECT * FROM pracownicy, organizacja WHERE dzial=id_org and (dzial=4 or dzial=2) and imie like '%a' ORDER BY zarobki asc LIMIT 3");
echo("<h2>Najlepiej zarabiający z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");


$sql = ("SELECT * FROM pracownicy ORDER BY data_urodzenia ASC LIMIT 1");
echo("<h2>Najstarszy mężczyzna</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


            
?>

        </div>
    </div>
</body>
</html>
