<?php 
//register-form.php
include("includes/header.php");
?>
<title>Registration Form</title>
<h1>Registration Form</h1>

<form action="process-register-form.php" method="POST"> 
<input type="text" name="username" placeholder="username">
<input type="text" name="password" placeholder="password">
<input type="text" name="firstName" placeholder="firstName">
<input type="text" name="lastName" placeholder="lastName">
<input type="text" name="dob" placeholder="dob">
<input type="submit" name="submit">
</form>

<?php
include("includes/footer.php");
?>