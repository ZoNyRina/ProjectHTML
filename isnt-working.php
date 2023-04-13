<?php 
session_start();
include 'Includes/Header.php' ;

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
?>
<html>

<br>
<br>

<button class="logoutbutton"><a href="Logout.php">Log Out</a></button>

<br>
<br>
<h2 class="oops">OOPS!! Quelque chose ne va pas <?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?> !! </h2>
<br>
<br>

    <head>
        <link rel="stylesheet" href="Part2.css">
    </head>

    <img src="image/its-not-working-oh-no.gif" class="itsnotworking">

<br>
<br>
<h4 class="pleaselogout">Please "Log Out" and retry</h4>
<br>
<br>

</html>
<?php include 'Includes/Footer.php' ; ?>