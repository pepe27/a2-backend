<?php 
//process-article-form.php 
include("includes/session-check.php");


//receive variables
$articleTitle = $_POST["articleTitle"];
$articleDate = $_POST["articleDate"];
$articleAuthor = $_POST["articleAuthor"];
$articleText = $_POST["articleText"];
$isFeatured = $_POST["isFeatured"];


//insert data into the database table

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("INSERT INTO `immnews-article` (`personId`, `articleTitle`, `articleDate`, `articleAuthor`, `articleText`, `isFeatured`) VALUES (NULL, '$articleTitle', '$articleDate', '$articleAuthor', '$articleText', '$isFeatured');");

//execute
if($stmt->execute() == true){
	header("Location: admin-dashboard.php");
    ?>
	<?php
}else{
	echo("Oops. Something went wrong");
	?>
	<a href="admin-dashboard.php">Back to Admin Dashboard</a>
	<?php
}
?>
