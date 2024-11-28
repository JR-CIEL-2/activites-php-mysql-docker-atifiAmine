<?php
$tableau = array("un","deux","trois");
function dernierElementTableau($tableau){
    $dernier = count($tableau)-1;
    return $tableau[$dernier];
        }
    
    
    

echo dernierElementTableau($tableau);
?>