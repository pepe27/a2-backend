<?php 
//process-contactNEW.php
?>

<?php
//receive variables 
$name1 = $_POST["name1"]; 
$email = $_POST["email"];
// $industry = $_POST["industry"]; 
// $technical = $_POST["technical"];
// $career = $_POST["career"]; 

$role = $_POST["role"]; //can have value of write, admin, contributor




//insert data into the database table

//connect
include("includes/db-connect.php"); 

//NOTE: THIS IS NOT SENDING IT YET, THOUGH!!!!!!!!!
//prepare

if (!$industry) $industry =""; else $industry ="1";
if (!$technical) $technical =""; else $technical ="1";
if (!$career) $career =""; else $career ="1";



$stmt = $pdo->prepare("INSERT INTO `immnews-contactpage` (`personId`, `name`, `email`, `industry`, `technical`, `career`, `role`) VALUES (NULL, '$name1', '$email', '$industry', '$technical', '$career', '$role');");
//$stmt = $pdo->prepare("INSERT INTO `immnews-contactpage` (`personId`, `name`, `email`, `industry`, `technical`, `career`) VALUES (NULL, '$name', '$email', '$industry', '$technical', '$career');");

//execute
if($stmt->execute() == true){
	echo('{"success":"true"}');
}else{
	echo('{"success":"false"}');
}
//insert doesn't need todisplay data
?>