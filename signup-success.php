<?php

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>IMM HTML</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<p>Congratulations! You've successfully signed up.</p>
		<a href="login.php">Login</a>
	</body>
</html>