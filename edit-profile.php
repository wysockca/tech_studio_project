<?php 

session_start();
if ($_SESSION['logged-in'] == true){

$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("SELECT * FROM `userinfo` WHERE `id` = '$id'");

$stmt->execute();
$row = $stmt->fetch();
?> 
<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Profile - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css" />
		<link rel="stylesheet" type="text/css" href="css/bg2.css">
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
		<h1>Edit Profile</h1>
		<form action="edit-profile-process.php" method="POST">
			<div class="row1">
				<label>Change username:</label>
				<input type='text' name='username' value="<?php echo($row["username"]); ?>"/>
			</div>
			<div class="row2">
				<label>Change email:</label>
				<input type='email' name='username' value="<?php echo($row["email"]); ?>"/>
			</div>  
			<div class="row3">
				<label>Change password:</label>
				<input type='password' name='password' value="<?php echo($row["password"]); ?>"/>
			</div>
			<div class="row4">
				<input type="image" id="submit" alt="Login" src="assets/submitbutton.svg">
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