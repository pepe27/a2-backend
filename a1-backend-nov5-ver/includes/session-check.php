<?php
session_start();
if(!isset($_SESSION["personId"])){
	?><p>Unknown user! </p>
	<a href="login.php">Back to login page</a>
	<?php
	exit();
}


?>