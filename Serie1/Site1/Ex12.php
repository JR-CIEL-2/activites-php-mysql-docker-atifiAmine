<?php
$argument1=1;
$argument2=2;
$argument3=3;
function pluspetit($argument1,$argument2,$argument3){
    if($argument1<$argument2) && ($argument1<$argument3){
        return $argument1;
    }else if ($argument2<$argument1) && ($argument2<$argument3){
        return $argument2;
    }else{
        return $argument3;
    }
}
?>