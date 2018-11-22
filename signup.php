<?php 

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign Up - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<header>
		<a class="logo" href="dashboard.php"><img id="logo" src="assets/logo.svg" /></a>	
	</header>
	<body>
		<a href="signup.php"><img id ="signup" src="assets/signupbutton.svg" /></a>
		<form action="process-signup.php" method="POST">
			Name:<input type="text" name="name"/>
			Email:<input type="email" name="email" />
			Username:<input type="text" name="username" />
			Password:<input type="password" name="password" />
			<input type="submit" />
		</form>
	</body>
</html>