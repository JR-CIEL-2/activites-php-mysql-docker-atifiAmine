<?php

function moyenne($notes){
    $somme=0;
    for($i=0;$i<count($notes);$i++){
        $somme += $notes[$i];
    }
    return $somme/count($notes);
}

function mediane($tableau){
    sort($tableau);
    $mediane=0;
    $N=count($tableau);
    if($N%2==0){
        $mediane+=moyenne([$tableau[$N / 2 - 1],$tableau[$N / 2]]);
    }else{
        $index = (int) ($N / 2); // Diviser N par 2 et convertir en entier
        $mediane = $tableau[$index];
        }

        return $mediane;
        
    }  
    

?>