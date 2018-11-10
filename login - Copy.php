<?php 

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css"> 
	</head>
	<body>
		<h1>Login</h1>
		<form action="process-login.php" method="POST">
			Username:<input type="text" name="username" />
			Password:<input type="password" name="password" />
			<input type="submit" />
		</form>
	</body>
</html>