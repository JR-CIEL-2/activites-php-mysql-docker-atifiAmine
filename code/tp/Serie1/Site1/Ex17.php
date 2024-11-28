<?php
$password = "password";

function verificationPassword($password){
    if(strlen($password)>=8){
        return true;
    }else{
        return false;
    }

}
if (verificationPassword($password)){
    echo "Mot de pass valide";
}else{
    echo "Mot de passe invalide";
}
?>