<?php

$notes = array(18,20,18,16);
$somme = 0;
$moyenne = 0;

function moyenne($notes,$somme,$moyenne){
    foreach($notes as $note){
        $somme += $note;
    }
        $moyenne =$somme/count($notes);
        return $moyenne;
    
}
echo "La moyenne est de " . moyenne($notes,$somme,$moyenne);
?>