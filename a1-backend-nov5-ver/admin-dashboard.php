<?php //admin-dashboard.php
include("includes/session-check.php");
include("includes/header.php");
?>

<?php
$personId = $_SESSION["personId"];
$isAdmin = $_SESSION["isAdmin"];
?>

<h1>Articles Dashboard</h1>

<!-- <button id="toggle">Reading Assistance</button> -->

<?php
//showing Add New Article Functionality for Admin User
if ( $isAdmin == '1') { ?>
    <h2>Admin Panel</h2>
    <a href="insert-article-form.php">Add a new Article</a>
    <br> <br>
    <?php   
}


//retrieve and display article records
//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `immnews-article`");

$currentUser = $pdo->prepare("SELECT * FROM `immnews-user-article` WHERE userId='$personId'");

//execute
$stmt->execute();
$currentUser->execute();

$waffle =  $currentUser->fetch();

//display results

while($row = $stmt->fetch()) { 

    $articleId = $row["personId"];
    // echo($articleId);

    //count number of likes on article   userId   articleId 	
    $st = $pdo->prepare("SELECT * FROM `immnews-user-article` WHERE `immnews-user-article`.`articleId` = $articleId;");
    $st->execute();
    $like = $st -> fetchAll();
    $likes = count($like);

    $user = $pdo->prepare("SELECT * FROM `immnews-user-article` WHERE `immnews-user-article`.`userId` = $personId AND `immnews-user-article`.`articleId` = $articleId");
    $user->execute();
    $userLike = $user->fetch();

    //show either like or unlike button, with counter of number of current likes
    if ($userLike){
        ?> 
        <a href="process-like.php?userId=<?= $_SESSION["personId"]; ?>&articleId=<?= $row["personId"]; ?> &like=0">Unlike(<?php echo("number of like: $likes") ?>)</a>
        <?php
    } else {
        ?>
        <a href="process-like.php?userId=<?= $_SESSION["personId"]; ?>&articleId=<?= $row["personId"]; ?> &like=1">Like(<?php echo("number of like: $likes") ?>)</a>
        <?php 
    }



    // //totalLikes 	
    // //1-Remove like from user-article 2. Decrement like from article total like 3.make it echo count on line 49
	// ?><p><?php 
    // //if ($waffle.article)
    // if ($row["personId"] == $waffle['articleId']) 
    //     if ($waffle['userId'] == $personId)
    //         if ( $waffle['userLiked'] == '1'){
    //             echo("Liked! ");
    //             //put the button in form / have php processing file
    //             echo('<input type="button" name="unlike" value="Unlike">');

    //         }
    
    ?>

    <!-- like button -->
    <!-- <a href="process-like.php?personId=<\?php echo($row["personId"]); ?>">Like</a>
    <p># people like this</p> -->



    <?php

    if ($row["isFeatured"] == '1') {  
        echo("<b>FEATURED ARTICLE!</b> ");
        echo("<br/>");
    }
	echo($row["personId"]);
	echo("<br/>");
	echo($row["articleTitle"]);
	echo("<br/>");
	echo($row["articleDate"]);
	echo("<br/>");
	echo($row["articleAuthor"]);
	echo("<br/>");
    echo($row["articleText"]);
	echo("<br/>");
    echo("Total Likes:");
    echo($row["totalLikes"]);
    echo("<br/>");
    echo("Featured Article:");
	echo($row["isFeatured"]);
	echo("<br/>");
	?>

    <?php
    
    //showing Edit,Delete,Feature Article Functionality for Admin User
    if ( $isAdmin == '1') { ?>
        <a href="update-article-form.php?personId=<?php echo($row["personId"]); ?>">Edit Article</a> <?php
        if ($row["isFeatured"] == '0') { ?>

            <form method="POST" action="process-update-feature-article.php">
                <input type="hidden" name="personId" 
                value="<?= $row["personId"] ?>">
                <input type="submit" name="isFeatured" value="Feature">
            </form>

            <!-- <a href="update-feature-article.php?personId=<\?php echo($row["personId"]); ?>">Set as Featured Article</a>  -->
            <?php
        } ?>
        <form method="POST" action="delete-article.php">
        <input type="hidden" name="personId" 
                value="<?= $row["personId"] ?>">
                <input type="submit" name="deleteArticle" value="Delete Article">
        </form>
        <?php

        
    } ?>

	</p><?php    
}

//showing Contact Form Submissions for Admin User
if ( $isAdmin == '1'){ 
    echo("<hr/>");
    echo("<h2>Contact Form Submissions</h2>");

    ?>
    <a href="view-contact.php">View Contact Form Submissions</a>
    <?php

} ?>
<?php

//showing About Page Info/Editing for Admin User
if ( $isAdmin == '1'){ 
    echo("<hr/>");
    echo("<h2>About Page</h2>");

    include("includes/db-connect.php"); 

    $stmt = $pdo->prepare("SELECT * FROM `immnews-about`");
    $stmt->execute();

    while($row = $stmt->fetch()) { 
        ?><p><?php    
        echo($row["aboutText"]);
        echo("<br/>");
        ?>
        <a href="update-about-page.php?personId=<?php echo($row["personId"]); ?>">Edit About Page</a>

        </p><?php    
    }

} ?>

<hr>
<div id="visitors">
        <h2>Site Vistors for Past 6 Months</h2>
        <table id="siteVisitors">
        </table>
</div>


<?php

include("includes/footer.php");
?>