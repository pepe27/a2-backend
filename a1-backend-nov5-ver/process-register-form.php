<?php //process-register-form.php


//receive variables
$username = $_POST["username"];
$password = $_POST["password"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$dob = $_POST["dob"];

//insert data into the database table

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("INSERT INTO `immnews` (`personId`, `username`, `password`, `isAdmin`, `firstName`, `lastName`, `dob`) VALUES (NULL, '$username', '$password', '0', '$firstName', '$lastName', '$dob');");


//execute
if($stmt->execute() == true){
	header("Location: admin-dashboard.php");
}else{
	echo("Oops. Something went wrong");
	?>
	<a href="register-form.php">Back to Registration.</a>
	<?php
}
?>
