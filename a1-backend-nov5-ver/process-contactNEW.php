<?php 
//process-contactNEW.php
?>

<?php
//receive variables 
$name = $_POST["name"]; 
$email = $_POST["email"];
$industry = $_POST["industry"]; 
$technical = $_POST["technical"];
$career = $_POST["career"]; 
$writer = $_POST["writer"];
$contributor = $_POST["contributor"]; 
$administrator = $_POST["administrator"];
$role = $_POST["role"]; 


//insert data into the database table

//connect
include("includes/db-connect.php"); 

//NOTE: THIS IS NOT SENDING IT YET, THOUGH!!!!!!!!!
//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-contactpage`");

//execute
$stmt->execute();

//display results (NEW STUFF)

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo($json);

?>


?>