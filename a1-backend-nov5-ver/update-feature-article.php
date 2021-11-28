<?php //update-feature-article.php 
include("includes/session-check.php");

$personId = $_GET["personId"];

include("includes/header.php");
?>

<h1>Update record #<?= $personId ?></h1>
<?php
//Preview of record
//(personId,etc.... of a specific article)

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-article` 
	WHERE `personId` = $personId");

//execute
$stmt->execute();

//display the record
$row = $stmt->fetch();
?>

<form method="POST" action="process-update-feature-article.php">
	<input type="hidden" name="personId" 
	value="<?= $row["personId"] ?>">
    <input type="submit" name="isFeatured" value="isFeatured">
</form>

<?php
include("includes/footer.php");
?>

