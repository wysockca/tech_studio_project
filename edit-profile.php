<?php 

session_start();
if ($_SESSION['logged-in'] == true;){

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
		<title>Sign Up - Spellbound: Enchanted Ascent</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<header>
		<a class="logo" href="dashboard.php"><img id="logo" src="assets/logo.svg" /></a>	
	</header>
	<body>
<h1>Edit Profile</h1>
	<form action="edit-profile-process.php" method="POST" enctype= 'multipart/form-data'>  
	<p>Change username: <input type='text' name='username' value="<?php echo($row["username"]); ?>"/></p>
	<p>Update password: <input type='password' name='password' value="<?php echo($row["password"]); ?>"/></p>
	<input type='submit'/> 
	</form>
</body>
</html>

<?php
}else{
	//redirect to login page if invalid
	header("Location: login.php");
}
?>