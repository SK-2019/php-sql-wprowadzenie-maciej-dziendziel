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
        <a class="menu" href="/biblioteka/ksiazki.php">Książki</a>
        <a class="menu" href="/flexbox.html">flexbox</a>
    </div>
        <div class="tresc">
        <?php
                require_once("../connect.php");
                $result=$conn->query("Select * From pracownicy");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>            
           <h2 class="hz1">SELECT * FROM pracownicy WHERE dzial=2</h2>
        <?php
                
                $result=$conn->query("Select * From pracownicy WHERE dzial=2");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
          <h2 class="hz1">SELECT * FROM pracownicy WHERE (dzial=2 OR dzial=3)</h2>
        <?php
                
                $result=$conn->query("SELECT * FROM pracownicy WHERE (dzial=3 or dzial=2)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="hz1">SELECT * FROM pracownicy WHERE zarobki<30</h2>
        <?php
                
                $result=$conn->query("Select * From pracownicy WHERE zarobki<30");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
        </div>
    </div>
</body>
</html>
