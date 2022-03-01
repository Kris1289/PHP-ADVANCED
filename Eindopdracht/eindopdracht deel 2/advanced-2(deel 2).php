<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht PHP 2.2 Kris Delver</title>
</head>
<body>
<center>

<?php 
echo"Tekst kleur is: " .$_POST['textColor'];
echo"<br/>";
echo"<br/>";
echo"Achtergrond kleur is: " .$_POST['backColor'];
?>

<style>
    body {
        background-color: <?php echo $_POST["backColor"];?>;
        color: <?php echo $_POST["textColor"];?>;
    }

    table, tr, td {
    border: <?php echo $_POST["tabelRand"]; ?>px solid black;
    padding: <?php echo $_POST["celPad"]; ?>px solid black;
    text-align: center;
    }
</style>
<br/>
<br/>
  
  <?php
  echo "<table>";
    $informatie = array(
        "Key"           =>      "Value",
        "Naam"          =>      "Kris",
        "Leeftijd"      =>      "17",
        "Klas"          =>      "1c",
        "Muziek"        =>      "Indie of Rap",
        "Merk fiets"    =>      "Gazelle",
        "Woonplaats"    =>      "Heerhugowaard",
        "Eten"          =>      "Spinazie"
    );

    function maakRij($keys, $value){
        echo"<tr>";
        echo"<td>";
        echo"$keys";
        echo"</td>";
        echo"<td>";
        echo"$value";
        echo"</td>";
        echo"</tr>";
    
    }
    foreach ($informatie as $keys => $value) {
        maakRij($keys, $value);
    }

    echo"</table>";
    
  /*
    foreach($informatie as $keys => $value){
        echo"<tr>";
        echo"<td>";
        echo"$keys";
        echo"</td>";
        echo"<td>";
        echo"$value";
        echo"</td>";
        echo"</tr>";
    }*/
    ?>
</table>

<center/>
    
</body>
</html>