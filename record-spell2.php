<?php

session_start();

$id = $_SESSION['id'];

$spell2 = $_POST['spell2'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `userinfo` SET `spell2` = '$spell2', `level_id` = '2' WHERE `userinfo`.`id` = $id;");
$stmt->execute();


header("Location: spellbook.php");
?>