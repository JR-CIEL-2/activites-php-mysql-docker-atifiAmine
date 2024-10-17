<?php
$tableau = array(1, 5, 4);

function plusPetit($tableau){
    if(empty($tableau)){
        return null;
    }
    $Plus_petit = $tableau[0];
    foreach($tableau as $element){
        if ($element < $Plus_petit){
            $Plus_petit = $element;
        }
    }
    return $Plus_petit;
}
echo plusPetit($tableau);
?>