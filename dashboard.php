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
//selecting all information about the user based on their id

$level = $row["level_id"];

$stmt3 = $pdo->prepare("SELECT * FROM `levels` WHERE `id` = '$level'");
$stmt3->execute();
$row3 = $stmt3->fetch();
//selecting the level information based on the users level

$stmt4 = $pdo->prepare("SELECT * FROM `levels-tower` WHERE `levelid` = '$level'");
$stmt4->execute();
$row4 = $stmt4->fetch();
//selecting the tower based on the users level

?>

<!doctype html>
<html>
	<head>
		<title>Spellbound: Enchanted Ascent</title>
		<meta charset="utf-8" />

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
		<div id="userinfo">
			<h1><?php echo($row["username"]); ?></h1>
			<h2>Current Level: <?php echo($row3["level"]); ?></h2>
		</div>
		<div id="moon"><img src="assets/moon.svg" /></div>
		<section>
			<div id="tower"><img src="assets/<?php echo($row4["image"]); ?>" /></div>
			<div id="avatar"><img id="avatar" src="assets/<?php echo($row3["image"]); ?>" /></div>
		</section>
		<a class="link" id="sb-link" href="spellbook.php"><img src="assets/spellbookbutton2.svg" /></a>
	<footer>
		<p>This site uses cookies</p>
	</footer>
	</body>
</html>

<?php } ?>