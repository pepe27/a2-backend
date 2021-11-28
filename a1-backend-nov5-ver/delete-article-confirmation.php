<?php 
// delete-article-confirmation.php
include("includes/session-check.php");

if(isset($_GET["personId"]) == true){
	$personId = $_GET["personId"];
	include("includes/header.php");
?>

<h1>Are you sure you want to delete this article?</h1>

<?php
//Preview of article
//(personId, first name , last name, dob of a specific record)
include("includes/db-connect.php"); 
//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-article` 
	WHERE `personId` = $personId");
//execute
$stmt->execute();

//display the record
$row = $stmt->fetch();
echo($row["personId"]);
echo($row["articleTitle"]);
echo($row["articleDate"]);
echo($row["articleAuthor"]);
echo($row["articleText"]);
echo($row["isFeatured"]);

?>

<form method="POST" action="delete-article.php">
	<input type="hidden" name="personId" 
	value="<?php echo($row["personId"]);?>">
	<input type="submit">
</form>

<a href="admin-dashboard.php">Go Back</a>
<?php
}else{
	?><p>Sorry, we do not know which article to confirm</p><?php
}

include("includes/footer.php");
?>