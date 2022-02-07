<!DOCTYPE html>
<html>
<body>

<?php
$persoon["voornaam"]   = "Kris";
$persoon["achternaam"] = "Delver";
$persoon["leeftijd"]   = 17;
$persoon["school"]  = "het ROC van Amsterdam aan de opleiding Software Ontwikkeling.";

echo $persoon['voornaam']. " " . $persoon['achternaam']. " is " .  $persoon['leeftijd']. " jaar oud" .  " en is student aan " . $persoon['school'] ;

?>

</body>
</html>