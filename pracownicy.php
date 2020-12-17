<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="con">
    <div class="nav">
        <a class="link a" href="https://github.com/SK-2019/php-sql-wprowadzenie-maciej-dziendziel" >GITHUB</a>
            <a class="link e" href="index.php">Index</a>
            <a class="link b" href="pracownicy.php">Pracownicy</a>
            <a class="link c" href="pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="link d" href="Funkcje Agreugjące.php">Funkcje agregujące</a>
            <a class="link h" href="dataczas.php">Data i Czas</a>
            <a class="link z" href="formularz.html">Formularz</a>
            <a class="link y" href="daneDoBazy.php">DaneDoBazy</a>
            <a class="link g" href="książki.php">Książki</a>
                </nav>
              </div>
               <div class="item a">
            <h2 class="hz1">PRACOWNICY:</h2>
        <?php
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
                require_once("connect.php");
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
           </div>
      </body>
    </html>
