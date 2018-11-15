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

$stmt2 = $pdo->prepare("SELECT * FROM `levels` WHERE `id` = '$id'");
$stmt2->execute();
$row2 = $stmt2->fetch();

?>

<!doctype html>
<html>
	<head>
		<title>Spellbound: Enchanted Ascent</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css"> 
	</head>
	<body>
	<header>
        <nav>
            <ul>
            <li><a href="edit-profile.php">Home</a></li>            	
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>		
	</header>
	<main>
		<h1><?php echo($row["username"]); ?></h1>
		<h2><?php echo($row2["level"]); ?></h2>
		<img id="avatar" src="assets/<?php echo($row2["image"]); ?>" />
		<p><a href="spellbook.php">Spellbook</a></p>
	</main>
	<footer>
		<p>This site uses cookies</p>
	</footer>
	</body>
</html>

<?php } ?>