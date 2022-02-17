<!DOCTYPE html>
<html>
<body>

<?php
echo"voornaam: " .$_POST["name"];

echo"<br>";

echo"achternaam: " .$_POST["achternaam"];

echo"<br>";

echo"klas: " .$_POST["klas"];

echo"<br>";

echo"leeftijd: " .$_POST["leeftijd"];

echo"<br>";

echo"adres: " .$_POST["adres"];

echo"<br>";

echo"woonplaats: " .$_POST["woonplaats"];

echo"<br>";

echo" " .$_POST["geslacht"];

echo"<br>";

echo $_POST["color"];


?>

<style>
    body {
        background-color: <?php echo $_POST["color"];?>;
    }
</style>    





</body>
</html>