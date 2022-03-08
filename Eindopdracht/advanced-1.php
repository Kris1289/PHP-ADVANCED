<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

    <form name="invoer" action="advanced-2.php" method="post">

<p>Text kleur: </p>
<select name="color">
<?php
    echo "<ul>";

   $kleuren = array( "red", "blue", "green", "black", "brown");
   foreach ($kleuren as $kleurenlijst) {
      echo "<option><li>" . $kleurenlijst . "</li></option>";
    }

   echo "</ul>";
 ?>
</select>

<p>Achtergrond kleur: </p>
<select name="color2">
<?php
 echo "<ul>";

 $kleuren2 = array("red", "blue", "green", "black", "brown");
   foreach ($kleuren2 as $kleurenlijst2) {
      echo "<option><li>" . $kleurenlijst2 . "</li></option>";
   }

   echo "</ul>";
 ?>
</select>

<p>Tabelranddikte: </p>
<input type="text" name="tabelrand" style=text-align:center>

<p>Cel-padding: </p>
<input type="text" name="padding" style=text-align:center>

<br><br>

<input type="submit" name="submit" value="Verzenden">

</form>
</center>
</body>
</html>
