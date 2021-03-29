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
    <div class="nav">
        <a class="menu" href="https://github.com/SK-2019/php-sql-wprowadzenie-maciej-dziendziel" >GITHUB</a>
        <a class="menu" href="index.php">Index</a>
        <a class="menu" href="/pracownicy/pracownicy.php">Pracownicy</a>
        <a class="menu" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
        <a class="menu" href="/funkcje/Funkcje Agreugjące.php">Funkcje agregujące</a>
        <a class="menu" href="/inne/dataczas.php">Data i Czas</a>
        <a class="menu" href="/formularz.html">Formularz</a>
        <a class="menu" href="/formularze/daneDoBazy.php">DaneDoBazy</a>
        <a class="menu" href="/bibliotekapliki/ksiazki.php">Książki</a>
        <a class="menu" href="flexbox.html">flexbox</a>
    </div>
        <div class="tresc">
        <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="name"></br>
        <input type="number" name="dzial" placeholder="dzial"></br>
        <input type="number" name="zarobki" placeholder="zarobki"></br>
        <input type="date" name="data_urodzenia" placeholder="data urodzenia"></br>
        <input type="submit" value="dodaj pracownika"></br>
    </form>
        <h1>Maciej Dziendziel</h1>
            <h2>Select * from pracownicy</h2>
        <?php
        $d=strtotime("now");
        echo "<li>".date("Y-m-d h:i:sa", $d) . "<br>";
                require_once("connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
            <h2>Zad 2 Select * From pracownicy where imie like '%a' and dzial between 2 and 4</h2>
        <?php
                
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie like '%a' and dzial between 2 and 4");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class=h2zc>Zad 3 Select avg(zarobki), dzial From pracownicy group by dzial</h2>
        <?php
               
                $result=$conn->query("Select avg(zarobki), dzial, nazwa_dzial From pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<table border=1>");
                    echo("<th>Avg zarobki</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["avg(zarobki)"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2>Zad 4 Select * From pracownicy where imie not like '%a' and zarobki between 15 and 50</h2>
        <?php
               
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and imie not like '%a' and zarobki between 15 and 50");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2>Zad 5 Select * From pracownicy where zarobki>15 and (dzial=1 or dzial=4)</h2>
        <?php
               
                $result=$conn->query("Select * From pracownicy, organizacja where dzial=id_org and zarobki>15 and (dzial=1 or dzial=4)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Nazwa_dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>

        </div>
    </div>
</body>
</html>
