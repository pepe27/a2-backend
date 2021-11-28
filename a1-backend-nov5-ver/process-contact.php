<?php //proccess-contact.php ?>

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




// if ($technical = "industry") $technical ="1";
// else $technical ="0";



$stmt = $pdo->prepare("INSERT INTO `immnews-contactpage` (`personId`, `name`, `email`, `industry`, `technical`, `career`, `writer`, `contributor`, `administrator`) VALUES (NULL, '$name', '$email', '$industry', '$technical', '$career', '$writer', '$contributor', '$administrator');");


//execute
if ($stmt->execute() == true) {
    echo("Thank you for your submission!");
    ?>
    <a href="login.php">Back to Login </a>
    <?php
} else {
    echo ("Oops. Something went wrong");
    ?>
    <a href="login.php">Back to Login </a>
    <?php
}
?>

<?php ?> 