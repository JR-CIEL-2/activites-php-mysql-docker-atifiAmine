<?php
$array = array("un","deux","trois");
function  premierElementTableau($array){
    if (count($array)>0){
        return $array[0];
    }else{
        return null;
    }
}
echo premierElementTableau($array);
?>
    
 