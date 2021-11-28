<?php 
//login.php
include("includes/header.php");
?>

<h1>Welcome to ImmNews! Please login below:</h1>
<form action="process-login.php" method="POST"> 
 Username: <input type="text" name="username" />
 Password: <input type="text" name="password" />
    <input type="submit" />   
</form>

<?php
include("includes/footer.php");
?>