<?php

$string = "Bonjour les amis";

function  remplacerLesLettres($string){
    $nouveau_string = '';
    for($i=0;$i<strlen($string);$i++){
        $caractere = $string[$i];
        if($caractere=='e'){
            $nouveau_string .= '3';
        }else if ($caractere=='i'){
            $nouveau_string .= '1';
        }else if ($caractere=='o'){
            $nouveau_string .= '0';
        }else{
            $nouveau_string .= $caractere;
        }
    }
        return $nouveau_string;
    }

echo remplacerLesLettres($string);
?>