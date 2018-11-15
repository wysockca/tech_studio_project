<?php

session_start();

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Learn Spell - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<h1>You found Spell 2!</h1>
		<img src="assets/spell2.svg" />
		<form action="record-spell2.php" method="POST">
			<input type="hidden" name="spell2" value="1" />
			<input type="submit" value="Learn Spell" />
		</form>
	</body>
</html>