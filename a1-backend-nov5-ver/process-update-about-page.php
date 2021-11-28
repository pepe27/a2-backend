<?php 
//process-update-about-page.php 
include("includes/session-check.php");

$personId = $_POST["personId"];
$aboutText = $_POST["aboutText"];


//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("UPDATE `immnews-about` 
    SET `aboutText` = '$aboutText' 
    WHERE `immnews-about`.`personId` = $personId;");

// UPDATE `person` 
// 	SET `firstName` = '$firstName', 
// 	`lastName` = '$lastName', 
// 	`dob` = '$dob' 
// 	WHERE `person`.`personId` = $personId;

    

if($stmt->execute() == true){
	?>
    <?php
    header("Location: admin-dashboard.php");
}

?>
<a href="admin-dashboard.php">Back to Admin Dashboard</a>