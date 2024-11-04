<?php
$somme =0;
$tab = array(15,12,19);
forEach($tab as $key){
    $somme += $key;
}
$moyenne = $somme/count($tab);

echo "La moyenne est de " . $moyenne . " /20";

?>

