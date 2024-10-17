<?php

$string = "Capitale";
$tableau = array("Paris","Berlin","Moscou");

function listHTML($string,$tableau){
        $html =  '<h3>' . $string . '</h3>';
        $html .= '<ul>';
        foreach($tableau as $element){
            $html .=  '<li>' . $element . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

echo listHTML($string,$tableau);
?>