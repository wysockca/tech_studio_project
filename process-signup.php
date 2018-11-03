<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `spellentry` (`id`, `name`, `username`, `email`, `password`) VALUES (NULL, '$name', '$username', '$email', '$password'); ");

$stmt->execute();

header("Location: signup-success.php");

?>