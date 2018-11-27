<?php

session_start();

$id = $_SESSION['id'];

$spell1 = $_POST['spell1'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `userinfo` SET `spell1` = '$spell1', `level_id` = '1' WHERE `userinfo`.`id` = $id;");
$stmt->execute();


header("Location: spellbook.php");
?>