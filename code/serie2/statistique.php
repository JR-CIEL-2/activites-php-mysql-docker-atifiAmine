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
    for($i=0;$i<count($tableau);$i++){
        if(N%2==0){
            $mediane+=moyenne($N/2-1,$N/2);
        }else{
            $mediane=$N/2;
        }
        
    }  
    }

?>