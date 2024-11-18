<?php
include ("statistique.php");

$notes=array(10,11,12);
$salaires=array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$resultat_moyenne= moyenne($notes);
echo $resultat_moyenne;
$resultat_salaire=mediane($salaires);
echo $resultat_salaire;


?>

