<?php
include ("statistique.php");

$notes=array(10,11,12);
$salaires=array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$resultat_moyenne= moyenne($notes);
echo "La moyenne est de " .  $resultat_moyenne . '<br>';
$resultat_salaire=mediane($salaires);
echo " Le salaire median est de " . $resultat_salaire . "euros";


?>

