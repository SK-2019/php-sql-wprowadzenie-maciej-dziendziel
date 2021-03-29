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
        <a class="menu" href="/inne/dataczas.php">Data i Czas</a>
        <a class="menu" href="/formularz.html">Formularz</a>
        <a class="menu" href="/formularze/daneDoBazy.php">DaneDoBazy</a>
        <a class="menu" href="/bibliotekapliki/ksiazki.php">Książki</a>
        <a class="menu" href="/flexbox.html">flexbox</a>
    </div>
        <div=class"tresc"
        <?php
                require_once("../connect.php");
                $result=$conn->query("Select sum(zarobki) as es from pracownicy");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>         
                <h2 class="hz1">SELECT sum(zarobki) as es FROM pracownicy WHERE imie like '%a'</h2>
        <?php
                
                $result=$conn->query("Select sum(zarobki) as es from pracownicy WHERE imie like '%a'");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
           <h2 class="hz1">SELECT sum(zarobki) as es FROM pracownicy</h2>
        <?php
               
                $result=$conn->query("Select sum(zarobki) as es from pracownicy WHERE imie not like '%a' AND (dzial=2 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="hz1">SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a'</h2>
        <?php
                
                $result=$conn->query("Select avg(zarobki) as es from pracownicy WHERE imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="hz1">SELECT AVG(zarobki) as es FROM pracownicy WHERE dzial=4</h2>
        <?php
                
                $result=$conn->query("Select avg(zarobki) as es from pracownicy WHERE dzial=4");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?> 
        <h2 class="hz1">SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a' AND (dzial=1 or dzial=2)</h2>
        <?php
               
                $result=$conn->query("SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a' AND (dzial=1 or dzial=2)");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="hz1">SELECT count(imie) as es FROM pracownicy</h2>
        <?php
               
                $result=$conn->query("SELECT count(imie) as es FROM pracownicy");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="hz1">SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)</h2>
        <?php
                
                $result=$conn->query("SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>  
    <h2 class="hz1">SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)</h2>
        <?php
               
                $result=$conn->query("SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>                                      
        </div>
    </div>
</body>
</html>
