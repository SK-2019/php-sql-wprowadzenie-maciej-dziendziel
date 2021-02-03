<!DOCTYPE html>
<html lang="en">
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
            <h1>Dodaj Pracownika</h1>
        <form action="insert.php" method="POST">
            <input class="text 1" type="text" name="imie" placeholder="Imie">
            <input class="text 2"  type="text" name="dzial" placeholder="Dzial">
            <br><input class="text 3" type="text" name="zarobki" placeholder="Zarobki">
            <input class="text 4" type="date" name="data_">
            <div class="item g">
            <br><input class="przycisk" type="submit" value="Dodaj">
            </div>
            </form>
        </div>
        <div class="item c">
        <h1>Usuwanie Pracownika</h1>
        <?php
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
                            echo("<td><form method=POST action=delete.php>");
                            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
                            echo("<input type=submit value=X>");
                        echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
    </div>
    </div>
</body>
</html>
