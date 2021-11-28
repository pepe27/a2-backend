<?php 
//about-page.php
include("includes/header.php");?>

<?php
//retrieve and display about page
//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-about`");

//execute
$stmt->execute();

//display results
while($row = $stmt->fetch()) { 
	?><p><?php    
	echo($row["aboutText"]);
	echo("<br/>");
	?>

	</p><?php    
}
?>

<a href="login.php">Back to login</a>

<?php 
include("includes/footer.php");
?>