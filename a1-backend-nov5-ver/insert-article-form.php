<?php
//insert-article-form.php 
include("includes/session-check.php");


include("includes/header.php");
?>

<!-- articleTitle = $_POST["articleTitle"];
articleDate = $_POST["articleDate"];
articleAuthor = $_POST["articleAuthor"];
articleText = $_POST["articleText"];
isFeatured = $_POST["isFeatured"]; -->


<form method="POST" action="process-article-form.php">
	<input type="text" name="articleTitle" placeholder="articleTitle">
    <input type="text" name="articleDate" placeholder="articleDate">
    <input type="text" name="articleAuthor" placeholder="articleAuthor">
    <input type="textbox" name="articleText" placeholder="articleText">
    <input type="radio" id="isFeatured" name="isFeatured" value="1">
    <label for="isFeatured">isFeatured</label>
	<input type="submit">
</form>

<?php
include("includes/footer.php");
?>