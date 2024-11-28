<?php
session_start();  // Démarre la session pour pouvoir utiliser $_SESSION

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Charger les données JSON et les décoder
$json_data = file_get_contents('data.json'); 
$users = json_decode($json_data, true);

$user_exist = false;

// Vérifier si l'utilisateur existe déjà
foreach ($users as $user) {
    if ($user['email'] == $email) {
        $user_exist = true;
        break;
    }
}

if (!$user_exist) {
    // Si l'utilisateur n'existe pas, l'ajouter au fichier JSON
    $new_user = array(
        "name" => $name,
        "firstname" => $firstname,
        "email" => $email,
        "password" => $password
    );

    // Ajouter l'utilisateur au tableau des utilisateurs
    $users[] = $new_user;

    // Sauvegarder les utilisateurs dans le fichier JSON
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json_data);

    // Sauvegarder le nom de l'utilisateur dans la session
    $_SESSION['user_name'] = $name;

    // Rediriger vers la page bienvenue.php
    header("Location: bienvenue.php");
    exit();
} else {
    // Si l'utilisateur existe déjà, afficher un message d'erreur
    echo "Cet utilisateur existe déjà!";
}
?>
