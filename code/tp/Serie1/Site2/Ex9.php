<?php

$variable = 0;
while($variable<20){
    if($variable==10){
        echo '<h3>' . $variable . '</h3>';
    }
    echo $variable;
    $variable+= 2;
}
?>