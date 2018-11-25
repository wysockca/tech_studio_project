<?php

session_start();

if ($_SESSION['logged-in'] == true){

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
		<meta content="width=device-width, initial-scale=1" name="viewport" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css" />
		<link rel="stylesheet" type="text/css" href="css/bg3.css">
	</head>
	<body>
		<header>
			<a id="logo" href="dashboard.php"><img src="assets/logo.svg" /></a>
			<nav>
			<div class="flex-container">        	
            	<a class ="button" href="logout.php"><img src="assets/logoutbutton.svg" /></a>
        	</div> 
		</nav>
		</header>		
		<h1>You found Stella!</h1>
		<div class="spell">
			<img src="assets/spell1.svg" />
		</div>
		<form class="learn" action="record-spell1.php" method="POST">
			<div class="row1">
				<input type="hidden" name="spell1" value="1" />
				<input type="image" id="submit" alt="Login" src="assets/loginbutton.svg">
			</div>
		</form>
		<footer>
			<p>This site uses cookies</p>
		</footer>
	</body>
</html>

<?php
}else{
	//redirect to login page if invalid
	header("Location: login.php");
}
?>