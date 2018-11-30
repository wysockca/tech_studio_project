<?php

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Success! - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/bg2.css">
	</head>
	<body>
		<h1>Congratulations! You've successfully signed up.</h1>
		<a class="link" id="loginBtn" href="login.php"><img src="assets/loginbutton.svg" /></a>
	</body>
</html>