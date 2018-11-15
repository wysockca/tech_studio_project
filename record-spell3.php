<?php

session_start();

$id = $_SESSION['id'];

$spell3 = $_POST['spell3'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `userinfo` SET `spell3` = '$spell3', `level_id` = '3' WHERE `userinfo`.`id` = $id;");
$stmt->execute();


header("Location: dashboard.php");
?>