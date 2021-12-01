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

if (!$industry) $industry =""; else $industry ="1";
if (!$technical) $technical =""; else $technical ="1";
if (!$career) $career =""; else $career ="1";
if (!$writer) $writer =""; else $writer ="1";
if (!$contributor) $contributor =""; else $contributor ="1";
if (!$administrator) $administrator =""; else $administrator ="1";

if ($role = "contributor") $contributor ="1"; 
else if ($role = "administrator") $administrator ="1"; 
else if ($role = "writer") $writer ="1"; 
else {}


//$stmt = $pdo->prepare("SELECT * FROM `immnews-contactpage`");
$stmt = $pdo->prepare("INSERT INTO `immnews-contactpage` (`personId`, `name`, `email`, `industry`, `technical`, `career`, `writer`, `contributor`, `administrator`) VALUES (NULL, '$name', '$email', '$industry', '$technical', '$career', '$writer', '$contributor', '$administrator');");

//execute
$stmt->execute();

//display results (NEW STUFF)

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo($json);

?>