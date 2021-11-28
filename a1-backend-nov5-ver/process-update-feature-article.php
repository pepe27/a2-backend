<?php //process-update-feature-article.php
include("includes/session-check.php");

$personId = $_POST["personId"];
$isFeatured = $_POST["isFeatured"];

$articleTitle = $_POST["articleTitle"];
$articleDate = $_POST["articleDate"];
$articleAuthor = $_POST["articleAuthor"];
$articleText = $_POST["articleText"];
//$isFeatured = $_POST["isFeatured"];
//`isFeatured` = '$isFeatured'

//connect
include("includes/db-connect.php"); 

//prepare
// if ($row["isFeatured"] == 1) {
//     $stmt = $pdo->prepare("UPDATE `immnews-article` SET `isFeatured` = '0' WHERE `immnews-article`.`personId` = $personId");
//     $stmt->execute();
// }

$stmt = $pdo->prepare("UPDATE `immnews-article` SET `isFeatured` = '0' WHERE `immnews-article`.`isFeatured` = '1';");
$stmt->execute();

$stmt = $pdo->prepare("UPDATE `immnews-article` SET `isFeatured` = '1' WHERE `immnews-article`.`personId` = $personId;");
$stmt->execute();

//this was the overkill method
// $stmt = $pdo->prepare("UPDATE `immnews-article` SET `isFeatured` = '0' WHERE `immnews-article`.`personId` <> $personId;");
// $stmt->execute();




// UPDATE `immnews-article` SET `isFeatured` = '1' WHERE `immnews-article`.`personId` = $personId;

// SELECT * FROM `immnews-article` WHERE isFeatured = 1 UPDATE `isFeatured` = '0'


   
//execute
if($stmt->execute() == true){
	?>
    <?php
    header("Location: admin-dashboard.php");
}

?>
<a href="admin-dashboard.php">Back to Admin Dashboard</a>