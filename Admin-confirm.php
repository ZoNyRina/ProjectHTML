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

$tripdate_sent = $_GET["tripdate"];
$duration_sent = $_GET["duration"];
$summary_sent = $_GET["summary"];
$place_sent = $_GET["place"];

$_SESSION["tripdate"] = $tripdate_sent;
$_SESSION["duration"] = $duration_sent;
$_SESSION["summary"] = $summary_sent;
$_SESSION["place"] = $place_sent;

?>
<html>
    <head>
        <link rel="stylesheet" href="Part3.css">
    </head>
    <body>
        <br>
        <br>
        <div class="beforeconfirm1">
            <p class="beforeconfirm2"> Le voyage a été créé par </p>
            <?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?> 
            <br>
            <br>
            <p class="beforeconfirm2"> Va se faire à </p>
             <?=$place_sent?>
             <br>
            <br>
            <p class="beforeconfirm2"> À la date du </p>
             <?=$tripdate_sent?> 
            <br>
            <br>
            <p class="beforeconfirm2"> Pour une durée de </p>
             <?=$duration_sent?> 
            <br>
            <br>
            <p class="beforeconfirm2"> Avec comme description : </p>
            <?=$summary_sent?> 
            <br>
            <br>
            <p class="beforeconfirm2"> Veuillez s'il vous plaît vérifier si tout est correct, puis appuyez sur "confirmer" pour enregistrer les informations. Merci.</p>
            <br>
            <br>
            <button class="enregistrement"><a href="Admin-confirm2.php">Confirmer</a></button>
        </div>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>