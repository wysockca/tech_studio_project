<?php 

session_start();

if($_SESSION['logged-in'] == false){
	header("Location: main.php");
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
		<meta content="width=device-width, initial-scale=1" name="viewport" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css" /> 
		<link rel="stylesheet" type="text/css" href="css/bg1.css">  
	</head>
	<body>
	<header>
		<a id="logo" href="dashboard.php"><img src="assets/logo.svg" /></a>
		<nav>
			<div class="flex-container">
            	<a class ="button" href="edit-profile.php"><img src="assets/editprofilebutton.svg" /></a>          	
            	<a class ="button" href="logout.php"><img src="assets/logoutbutton.svg" /></a>
        	</div> 
		</nav>
	</header>
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

		<a class="link" href="dashboard.php"><img src="assets/castspellbutton.svg" /></a>
	</body>
	<footer>
		<p>This site uses cookies</p>
	</footer>
</html>
<?php } ?>