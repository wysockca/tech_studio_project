<?php

session_start();

$spell1 = $_POST['spell1'];
$spell2 = $_POST['spell2'];
$spell3 = $_POST['spell3'];
$spell4 = $_POST['spell4'];
$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `spellentry` SET `spell1` = '$spell1', `spell2` = '$spell2', `spell3` = '$spell3', `spell4` = '$spell4' WHERE `spellentry`.`id` = $id;");

$stmt->execute();

header("Location: dashboard.php");

?>