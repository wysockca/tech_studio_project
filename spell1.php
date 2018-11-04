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
		<title>Spell 1</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>You found Spell 1!</h1>
		<img src="assets/spell1.jpg" />
		<form action="record-spell1.php" method="POST">
			<input type="hidden" name="spell1" value="1" />
			<input type="submit" value="Learn Spell" />
		</form>
	</body>
</html>