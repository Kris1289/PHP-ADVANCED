<!DOCTYPE html>
<html lang="en">

<body>

<?php function schrijfKleur( $kleuren ){
   echo "<p style='color:$kleuren'>Deze tekst heeft de kleur $kleuren</p>";
} 

schrijfKleur('red');
schrijfKleur('blue');
schrijfKleur('yellow');
schrijfKleur('green');

?>

</body>
</html>