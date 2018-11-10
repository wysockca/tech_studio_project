<?php 

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_spellbook;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("
	SELECT * FROM `userinfo` 
	WHERE `username` = '$username' 
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['id'] = $row['id'];

header("Location: dashboard.php");

}else{
	//redirect to login page if invalid
	header("Location: login.php");
}
?>