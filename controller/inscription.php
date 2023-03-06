<?php

$pdo = getDb();
$name = $_POST['name'] ?? null;
$firstname = $_POST['firstname'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

$sql = "insert into users (`name`, firstname, email, password) values (:name, :firstname, :email, :password)";
$statement = $pdo->prepare($sql);
$result = $statement->execute(['name' => $name, 'firstname' => $firstname, 'email' => $email, 'password' => $password]);

$_SESSION['message'] = 'Inscription réussie !';
header('Location: /');

//$statment = $pdo->query('SELECT * FROM users INNER JOIN tasks ON users.id = tasks.user_id');
//$statment = $pdo->query('SELECT * FROM users INNER JOIN tasks ON users.id = tasks.user_id');
//$result = $statment->fetchAll(PDO::FETCH_ASSOC);

/*
echo '<pre>';
print_r($result);
echo '</pre>';
*/
