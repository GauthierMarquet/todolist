<?php

$dsn = 'mysql:dbname=todolist;host=127.0.0.1';
$user = 'root';
$password = null;

$pdo = new PDO($dsn, $user, $password);
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

$sql = "select * from users where email=:email and password=:password";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);


if(empty($result)) {
    $_SESSION['message'] = 'Email ou mot de passe non valide';
    header('Location: /connexion');
}else {
    $_SESSION['message'] = 'Connexion réussie !';
    $_SESSION['user'] = $result;
    header('Location: /');
}

/*
echo '<pre>';
print_r(empty($result));die();
echo '</pre>';
*/
