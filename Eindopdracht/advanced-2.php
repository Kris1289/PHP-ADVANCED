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

$gegevens = array(
    "naam:" => "Kris<br>",
    "leeftijd:" => "17<br>",
    "woonplaats:" => "Heerhugowaard<br>",
    "muzieksmaak:" => "Indie<br>",
    "sport:" => "Fitness<br>"
);

foreach ($gegevens as $keys => $value) {
    echo "<body style=background-color:" . $_POST['color2'] . ">
    <tr>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $keys . "</p> </td>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </td>
    </tr>";
}

echo "</table>";
?>

</center>

</body>
</html>