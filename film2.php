<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Maciej Dziendziel 2ti gr1</title>
    <link rel="stylesheet" href="style.css"/>
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/2/27/Bliss_%28Windows_XP%29.png"/>
    </head>
    <body>
    <div class="pole">
<html><body>
<form method="post" action="">
Imie: <input type="text" name="imie">
<input type="submit" value="wyslij">
</form>
<?php
if ($_POST['imie']=='maciek') {
  echo('czesc macius');
} else {
  echo('nie znam cie');
}
?>
</body></html>
</div>
</body>
</html>
