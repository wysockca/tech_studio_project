<?php

session_start();

$id = $_SESSION['id'];

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `userinfo` SET `username` = '$username', `password` = '$password' WHERE `userinfo`.`id` = $id;");
$stmt->execute();

header("Location: dashboard.php");
?>