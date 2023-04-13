<?php 
session_start();
include 'Includes/Header.php' ;

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
?>

<br>
<br>
<button class="logoutbutton"><a href="Logout.php">Log Out</a></button>
<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
        <style>
        .adressmail {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            border-radius:5px;
            background-color: rgb(6, 125, 223);
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
    </style>
    </head>
    <body>
        <br>
        <br>
        <h2 class=textfornewcomer>Bonjour <?=$gender_sent?> <?=$lastname_sent?>!! Vous avez perdu votre mot de passe ? Pas d'inquiétude !!</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="send-emailpassword.php">
            <div class="newaccountdiv">
                <br>
        Veuillez entrer votre adresse mail pour continuer la résolution de votre problème
                <div class="textnewaccount">
                    <div class=adressmail><?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?></div>
                    <div><input class=inputnewaccount type="text" name="mailadress" placeholder="e mail"></div>
                </div>
                <input type="submit">

                <ul>
                <li><a href="index.php" class="dejauncompt">Autre methode</a></li>
                </ul>
            </div>
    
            <br>
            <br>
            <br>
            <br>
        </form>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>