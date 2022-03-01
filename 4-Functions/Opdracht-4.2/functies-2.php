<!DOCTYPE html>
<html lang="en">


<body>

<?php  function rekenUit($getal, $getal2, $getal3){

$antwoorden = $getal + $getal2 + $getal3;
return $antwoorden;

}

echo "Als ik de getallen 6.5 en 5 bij elkaar optel, is de uitkomst"." " .rekenUit(6,5,5);
echo "<br><br>";
echo "Als ik de getallen 20,30 en 30 bij elkaar optel, is de uitkomst". " " .rekenUit(20,30,40);
echo "<br><br>";
echo "Als ik de getallen 50,60 en 60 bij elkaar optel, is de uitkomst"." ".rekenUit(50,60,70);

?>
</body>

</body>
</html>