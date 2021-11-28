<?php 
//update-article-form.php
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

<form method="POST" action="process-update-article-form.php">
	<input type="hidden" name="personId" 
	value="<?= $row["personId"] ?>">
	<input type="text" name="articleTitle" 
	value="<?= $row["articleTitle"] ?>">
	<input type="text" name="articleDate" 
	value="<?= $row["articleDate"] ?>">
	<input type="text" name="articleAuthor" 
	value="<?= $row["articleAuthor"]?>">
    <input type="text" name="articleText" 
	value="<?= $row["articleText"] ?>">
	<input type="submit">
</form>

<!-- <form method="POST" action="process-article-form.php">
	<input type="text" name="articleTitle" placeholder="articleTitle">
    <input type="text" name="articleDate" placeholder="articleDate">
    <input type="text" name="articleAuthor" placeholder="articleAuthor">
    <input type="textbox" name="articleText" placeholder="articleText">
    <input type="radio" id="isFeatured" name="isFeatured" value="isFeatured">
    <label for="isFeatured">isFeatured</label>
	<input type="submit">
</form> -->



<?php
include("includes/footer.php");
?>