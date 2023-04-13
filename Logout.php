<?php 
session_start();
include 'Includes/Header.php' ;

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
?>

<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
        <style>
            .h22 {
                text-align: center;
            }

            .deconnexion {
                background-color: #fa5448;
                color: white;
                border-radius:5px;
                padding:10px;
                border-color:#fa5448;
                margin-left: auto;
                margin-right: auto;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <div class="newaccountdiv">
        <br>
        <br>
            <h2 class=h22><?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?> connu comme "<?=$role_sent?>"</h2>
        <br>
        <br>
            Pour confirmer votre déconnexion, <br> cliquez sur le bouton "Confirmer" ci-dessous, s'il vous plait. <br>
            Merci.
        <br>
        <br>
            <button class="deconnexion"><a href="Logout2.php">Confirmer</a></button>
        <br>
        <br>
        <br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>