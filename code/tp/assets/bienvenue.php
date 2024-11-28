<?php
session_start();

if(isset($_SESSION['user_name'])){
    $name = $_SESSION['user_name'];
    echo 'Bienvenue' . $name;
}

?>



