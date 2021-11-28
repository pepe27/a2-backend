<?php 
include("includes/header.php");

session_start();  

session_destroy();

?>

<a href="login.php">Back to login</a>

<?php
include("includes/footer.php");
?>