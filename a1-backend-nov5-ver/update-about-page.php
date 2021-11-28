<?php 
//update-about-page.php
include("includes/session-check.php");

$personId = $_GET["personId"];

include("includes/header.php");
?>

<h1>Update About Page</h1>
<?php
//Preview of record
//(personId, aboutText of about page)

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-about` 
	WHERE `personId` = $personId");

//execute
$stmt->execute();

//display the record
$row = $stmt->fetch();
?>

<form method="POST" action="process-update-about-page.php">
	<input type="hidden" name="personId" 
	value="<?= $row["personId"] ?>">
	<input type="text" name="aboutText" 
	value="<?= $row["aboutText"] ?>">
	
	<input type="submit">
</form>

<?php
include("includes/footer.php");
?>