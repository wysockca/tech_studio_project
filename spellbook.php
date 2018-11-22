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

$level = $row["level_id"];

$stmt3 = $pdo->prepare("SELECT * FROM `levels` WHERE `id` = '$level'");
$stmt3->execute();
$row3 = $stmt3->fetch();

?>

<!doctype html>
<html>
	<head>
		<title>Spellbook</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css"> 
	</head>
	<body>
	<header>
		<a href="dashboard.php"><img id ="logo" src="assets/logo.svg" /></a>
        <nav>
            <ul>
            <!--<li><a href = "dashboard.php">Home</a></li> 
            <li><a href = "edit-profile.php">Edit Profile</a></li>           	
            <li><a href = "logout.php">Logout</a></li>-->
            </ul>
            <a class ="button" href="dashboard.php"><img src="assets/homebutton.svg" /></a>
            <a class ="button" href="editprofile.php"><img src="assets/editprofilebutton.svg" /></a>          	
            <a class ="button" href="logout.php"><img src="assets/logoutbutton.svg" /></a>
            
        </nav>		
	</header>
	<main>
		<h1>My Spell Book</h1>
		<div id="spells">
			<?php if (($row["spell1"]) == '1'){ ?>
				<!--<p id="spell1">Spell 1</p>-->
				<a id="spellbook"><img src="assets/spellbook1.svg" /></a>
			<?php } 

			else if (($row["spell2"]) == '1'){ ?>
				<a id="spellbook"><img src="assets/spellbook2.svg" /></a>
			<?php } 

			else if (($row["spell3"]) == '1'){ ?>
				<a id="spellbook"><img src="assets/spellbook3.svg" /></a>
			<?php } 

			else if (($row["spell4"]) == '1'){ ?>
				<a id="spellbook"><img src="assets/spellbook4.svg" /></a>
			<?php } 

			else { ?>
				<a id="spellbook"><img src="assets/spellbook0.svg" /></a>
				<?php } ?>
			</div>
			
		<!--<a class="link" href="">Cast Spell</a>-->
		<a class="link" href="#"><img src="assets/castspellbutton.svg" /></a>
	</main>
	</body>
</html>
<?php } ?>