<?php
include ("statistique.php");
include("triangle.php");
include("tri_selection.php");

$notes=array(10,11,12);
$salaires=array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$resultat_moyenne= moyenne($notes);
echo "La moyenne est de " .  $resultat_moyenne . '<br>';
$resultat_salaire=mediane($salaires);
echo " Le salaire median est de " . $resultat_salaire . " euros " . '<br>';

$n = (int)$_GET['n'];
echo triangle($n);

echo implode(',',$salaires) . '<br>';

tri_selection($salaires);
echo implode(',',$salaires);



?>

