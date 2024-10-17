<?php
$tableau = array(1, 5, 4);

function plusGrand($tableau){
    if(empty($tableau)){
        return null;
    }
    $Plus_grand = $tableau[0];
    foreach($tableau as $element){
        if ($element > $Plus_grand){
            $Plus_grand = $element;
        }
    }
    return $Plus_grand;
}
echo plusGrand($tableau);
?>