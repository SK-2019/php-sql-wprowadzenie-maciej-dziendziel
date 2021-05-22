<html><body>
<form method="post" action="">
Imie: <input type="text" name="imie">
<input type="submit" value="wyslij">
</form>
<?php
if ($_POST['imie']=='maciek') {
  echo('witaj moj panie');
} else {
  echo('nie znam cie');
}
?>
</body></html>
