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
        <?php include("../assets/menu.php") ?>
    </div>
        <div class="tresc">
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
                require_once("../connect.php");
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
