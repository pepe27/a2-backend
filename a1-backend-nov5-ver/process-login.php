<?php
session_start();    
//process-login.php

$username = $_POST["username"];
$password = $_POST["password"];
//$isAdmin = $_POST["isAdmin"]; //dont need,not getting this value from form anyways

include("includes/db-connect.php");

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews` 
	WHERE `username` = '$username' 
	AND `password` = '$password'");
//execute
$stmt->execute();

if($row = $stmt->fetch()){
	
	//header("Location:admin-dashboard.php");
	
	$_SESSION["personId"] = $row["personId"];
	$_SESSION["username"] = $row["username"];
    //$_SESSION["isAdmin"] = $row["isAdmin"];

	// Dylan's deal with a situation where there's no isAdmin
	if(isset($row["isAdmin"])) {
		$_SESSION["isAdmin"] = $row["isAdmin"];
	}

	
	header("Location:admin-dashboard.php");
}else{
	?><p>NOT Correct username and password</p>
		<a href="login.php">Back to login</a>
	<?php
}

?>