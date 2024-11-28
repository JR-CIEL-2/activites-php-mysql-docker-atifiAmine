<?php

include("statistiques.php");
include("tri_selection.php");

$notes=array(10,11,12);
$resultat_moyenne=moyenne($notes);
echo " La moyenne est de " . $resultat_moyenne . '<br>';

$salaires=array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$resultat_salaire=mediane($salaires);
echo "Le salaire médian est de " . $resultat_salaire . ' euros  ' . '<br>';

echo implode(',',$salaires) . '<br>';

implode(',',$salaires);
$resultat=tri_selection($salaires);
echo implode(',',$salaires);
?>
