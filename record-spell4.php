<?php

session_start();

$id = $_SESSION['id'];

$spell4 = $_POST['spell4'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `userinfo` SET `spell4` = '$spell4' WHERE `userinfo`.`id` = $id;");
$stmt->execute();

header("Location: dashboard.php");
?>