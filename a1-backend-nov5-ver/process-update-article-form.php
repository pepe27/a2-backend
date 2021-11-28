<?php 
//process-update-article-form.php
include("includes/session-check.php");

$personId = $_POST["personId"];
$articleTitle = $_POST["articleTitle"];
$articleDate = $_POST["articleDate"];
$articleAuthor = $_POST["articleAuthor"];
$articleText = $_POST["articleText"];
//$isFeatured = $_POST["isFeatured"];
//`isFeatured` = '$isFeatured'

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("UPDATE `immnews-article` 
    SET `articleTitle` = '$articleTitle',
    `articleDate` = '$articleDate',
    `articleAuthor` = '$articleAuthor',
    `articleText` = '$articleText'
    WHERE `immnews-article`.`personId` = $personId;");

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