<?php

session_start();

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$id = $_SESSION['id'];

$stmt = $pdo->prepare("SELECT * FROM `spellentry` WHERE `id` = '$id'");

$stmt->execute();

$row = $stmt->fetch();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Spell 3</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>You found Spell 3!</h1>
		<img src="assets/spell1.jpg" />
		<form action="record-spell.php" method="POST">
			<input type="hidden" name="spell3" value="1" />
			<input type="submit" value="Learn Spell" />
		</form>
	</body>
</html>