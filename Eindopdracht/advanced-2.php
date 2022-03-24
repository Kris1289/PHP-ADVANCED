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

<?php
echo "<table style=border-spacing:" . $_POST['tabelrand'] . "px>";

$info = array(
    "Naam" => "Kris<br>",
    "Leeftijd" => "17 <br>",
    "Woonplaats" => "Heerhugowaard<br>",
    "Hobby" => "Gamen<br>",
    "Muziek Genre" => "Indie en Pop<br>",
    "Favoriete Artiest" => "The Weeknd<br>"
);

foreach ($info as $keys => $value) {
    echo "<body style=background-color:" . $_POST['color2'] . ">
    <tr>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $keys . "</p> </th>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </th>
    </tr>";
}

echo "</table>";
?>


</center>

</body>
</html>