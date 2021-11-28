<?php
//delete-article.php
include("includes/session-check.php");
include("includes/header.php");

if(isset($_POST["personId"]) == false){
	?> <p>We do not have the correct variables for this file to run</p><?php
}else{

//receive variables
$personId = $_POST["personId"];

//delete a specific record
//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("DELETE FROM `immnews-article` 
	WHERE `personId` = $personId");

if($stmt->execute() == true){
	?> <?php 
    header("Location: admin-dashboard.php");
}

?>
<a href="admin-dashboard.php">Back to Admin Panel</a>

<?php
}

include("includes/footer.php");
?>