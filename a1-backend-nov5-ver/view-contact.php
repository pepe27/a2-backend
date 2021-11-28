<?php 
//view-contact.php
include("includes/session-check.php");
include("includes/header.php");

echo("<h1>Contact Form Submissions</h1>");

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-contactpage`");

//execute
$stmt->execute();

//display results
while($row = $stmt->fetch()) { 
	?><p><?php    
	echo($row["personId"]);
	echo("<br/> name:");
	echo($row["name"]);
	echo("<br/> email:");
	echo($row["email"]);
	echo("<br/> industry:");
    echo($row["industry"]);
	echo("<br/> technical:");
	echo($row["technical"]);
	echo("<br/> career:");
    echo($row["career"]);
	echo("<br/> writer:");
	echo($row["writer"]);
	echo("<br/> contributor:");
    echo($row["contributor"]);
	echo("<br/> admin:");
	echo($row["administrator"]);
	echo("<br/>");
	?>
	
	</p><?php    
}?>
