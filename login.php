<?php 

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Log In - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css" /> 
		<link rel="stylesheet" type="text/css" href="css/bg2.css">
	</head>
	<body>
		<header>
		<a id="logo" href="dashboard.php"><img src="assets/logo.svg" /></a>
		</header>
		<h1>Log In</h1>
		<form action="process-login.php" method="POST">
			<div class="row1">
				<label>Username:</label>
				<input type="text" name="username" />
			</div>
			<div class="row2">
				<label>Password:</label>
				<input type="password" name="password" />
			</div>
			<div class="row3">
				<input type="image" id="submit" alt="Login" src="assets/submitbutton.svg">
			</div>
		</form>
	</body>
</html>