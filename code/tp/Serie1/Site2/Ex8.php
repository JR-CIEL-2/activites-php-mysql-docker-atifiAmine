<?php

$heure = 18;
if($heure >= 6 && $heure<12){
    echo "Bonne matinée";
}else if ($heure >= 12 && $heure<20){
    echo "Bon après-midi";
}else{
    echo "Bonne nuit";
}

?>