<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
                <div class="git">
            <h3><a href="https://github.com/SK-2019/php-sql-wprowadzenie-maciej-dziendziel">GITHUB</h3>
                </div>
          <div class="maciek">
                 <nav>
            <a class="nav1" href="index.php">Strona główna</a>
            <a class="nav1 active" href="pracownicy.php">Pracownicy</a>
            <a class="nav1" href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="nav1" href="funkcjeagregujace.php">Funkcje Agregujące</a>
                </nav>
              </div>
<div class="pracownicy">
    <h2 class="hz1">SELECT sum(zarobki) as es FROM pracownicy</h2>
        <?php
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
