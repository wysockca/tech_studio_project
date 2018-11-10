<?php 

session_start();

if($_SESSION['logged-in'] == false){
	echo("You are not allowed to view this page");
	?><a href="login.php">Go to login</a><?php
}else{

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$id = $_SESSION['id'];

$stmt = $pdo->prepare("SELECT * FROM `userinfo` WHERE `id` = '$id'");

$stmt->execute();

$row = $stmt->fetch();

?>

<!doctype html>
<html>
	<head>
		<title>Spellbook - Spellbound: Enchanted Ascent</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css"> 
	</head>
	<body>
	<header>
        <nav>
            <ul>
            <li><a href = "dashboard.php">Home</a></li> 
            <li><a href = "edit-profile.php">Edit Profile</a></li>           	
            <li><a href = "logout.php">Logout</a></li>
            </ul>
        </nav>		
	</header>
	<main>
		<h1>Spell Book</h1>
		<?php if (($row["spell1"]) == '1'){ ?>
				<p>Spell 1</p>
		<?php } 
			if (($row["spell2"]) == '1'){ ?>
			<p>Spell 2</p>
		<?php }
			if (($row["spell3"]) == '1'){ ?>
			<p>Spell 3</p>	
		<?php }
		if (($row["spell4"]) == '1'){ ?>
			<p>Spell 4</p>
		<?php } ?>	
		<p><a href="">Cast Spell</a></p>
	</main>
	</body>
</html>
<?php } ?>