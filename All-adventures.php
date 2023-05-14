<?php 
session_start();
include 'Includes/Header.php' ;

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
$tripdate_sent = $_SESSION["tripdate"];
$duration_sent = $_SESSION["duration"];
$summary_sent = $_SESSION["summary"];
$place_sent = $_SESSION["place"];

?>
<html>
    <head>
        <link rel="stylesheet" href="Part3.css">
    </head>
    <body>
    <img class="imgcanoe" src="image/CanoeImage.jpg" alt="canoepng"/>

<!-- Text -->
        <h1>Upcoming Adventure</h1>
        <div id="text" class="text">
            <div class="space1">
                <u><h2><?=$place_sent?></h2></u>
                <div>Date : <?=$tripdate_sent?></div>
                <div>Durée : <?=$duration_sent?></div>
            </div>
            <b>Summary</b>
            <p> Un voyage créer et superviser par <?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?>, <?=$summary_sent?></p>
            <br>
            <br>
        </div>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>