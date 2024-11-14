<?php



$budget = 1553.89;
$achats = 1554.76;

function budget($budget,$achats){
    if($budget>=$achats){
        return true;
    }else{
        return false;
    }
    }
echo budget($budget,$achats);

?>