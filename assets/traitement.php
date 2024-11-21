<?php

$name=$_POST['name'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$password=$_POST['password'];

$json_data = file_get_contents('data.json'); 
$users = json_decode($json_data, true);

$user_exist=false;

foreach($users as $user){
    if($user['email']==$email ){
        $user_exist = true;
        break;
    }
}

if(!$user_exist){
    $new_user = array(
        "name" => $name,
        "firstname" => $firstname,
        "email" => $email,
        "password" => $password
    );

    $users[]=$new_user;

    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json_data);

    echo "Utilisateur ajouté avec succès!";
    echo $name;
    
 }else{

    // Si l'utilisateur existe déjà, afficher un message d'erreur
     echo "Cet utilisateur existe déjà!";
}

?>
    

