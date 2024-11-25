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
    //Si N est pair, je calcule la moyenne des deux valeurs centrales du tableau pour avoir la médiane//
    if($N%2==0){
        $mediane+=moyenne([$tableau[$N / 2 - 1],$tableau[$N / 2]]);
    }else{
    //Si N est impair, la médiane est la valeur centrale du tableau mais comme N est impair, je convertit N en int pour avoir une valeur entière//
        $index = (int) ($N / 2); 
        $mediane = $tableau[$index];
        }

        return $mediane;
        
    }  
    

?>