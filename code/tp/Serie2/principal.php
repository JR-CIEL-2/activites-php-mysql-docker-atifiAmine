<?php

include ("moyenne.php");
include ("budget.php");

$mes_notes = array(10,11,12);
echo " La moyenne est de " . moyenne($mes_notes);

$budget = 1000;
$achats = 500;

if (budget($achats,$budget)){
    echo " Le budget n'est pas suffisant";
}else{
    echo " Le budget est suffisant";
}

?>