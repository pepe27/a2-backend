<?php
//contact.php

//contactText, contactInfo
include("includes/header.php");
?>

<title>Contact Form</title>
    <h1>Contact Form for IMMNews</h1>
    <section id="formStatus"> </section> 

    <p id="message">Please fill out the form below!</p>
    <form id="ajaxForm" action="process-contactNEW.php" method="POST">
        <input id="name1" type="text" name="name1" placeholder="Spongebob" required>
        <input id="email" type="email" name="email" placeholder="pineapple@thesea.com" required>
        
        <p>Category interests:</p>
        <input type="checkbox" id="industry" name="industry" value="industry">
        <label for="industry"> Industry</label><br>
        <input type="checkbox" id="technical" name="technical" value="technical">
        <label for="technical"> Technical</label><br>
        <input type="checkbox" id="career" name="career" value="career">
        <label for="career"> Career</label><br><br>


        <!-- <p>Your Role:</p>
        <input type="checkbox" id="writer" name="writer" value="writer">
        <label for="writer">Writer</label>
        <input type="checkbox" id="contributor" name="contributor" value="contributor">
        <label for="contributor">Contributor</label>
        <input type="checkbox" id="administrator" name="administrator" value="administrator">
        <label for="administrator">Administrator</label>
        <input type="submit" name="submit"> -->

        <p>Your Role:</p>
        <input type="radio" id="writer" name="role" value="writer">
        <label for="writer">Writer</label>
        <input type="radio" id="contributor" name="role" value="contributor">
        <label for="contributor">Contributor</label>
        <input type="radio" id="administrator" name="role" value="administrator">
        <label for="administrator">Administrator</label>
        <input id="submit" type="submit" name="submit">

    </form>


<?php
include("includes/footer.php");
?>

