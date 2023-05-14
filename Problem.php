<?php 
session_start();
include 'Includes/Header.php' ;
$gender_sent = $_GET["gender"];
$lastname_sent = $_GET["lastname"];
$firstname_sent = $_GET["firstname"];
$role_sent = $_GET["role"];

$_SESSION["gender"] = $gender_sent;
$_SESSION["lastname"] = $lastname_sent;
$_SESSION["firstname"] = $firstname_sent;
$_SESSION["role"] = $role_sent;
?>



<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
        <style>
            .optionlink {
                margin-left: auto;
                margin-right: auto;
                justify-content: center;
                align-items: center;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
                border-radius:5px;
                text-align: center;
                background-color: rgb(6, 125, 223);
                width: 250px
                }
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class=textfornewcomer>Bienvenue <?=$gender_sent?> <?=$lastname_sent?>, vu que vous êtes un <?=$role_sent?> voici les options possible pour vous !!</h2>
        <br>
        <br>
        <br>
        <button class="logoutbutton"><a href="Logout.php">Log Out</a></button>
        <br>
        <br>
        <br>
        <br>

<!--PHP OPTION POSSIBLE-->
        <?php

        if ($role_sent == "Admin") {
            echo "<div class=optionlink><a class=optionlink href=new-account.php>New Account</a></div>";
        } else if ($role_sent == "Manager") {
            echo "<div class=optionlink><a class=optionlink href=lost-password.php>Lost Password</a></div>";
        } else if($role_sent == "CEO") {
            echo "<div class=optionlink><a class=optionlink href=need-help.php>Phone Number</a></div>";
        } else if($role_sent == "TripPlaner") {
            echo "<div class=optionlink><a class=optionlink href=Admin-add.php>Let's plan a new trip</a></div>";
        }

        ?>
        <br>
        <br>
        <div class="optionlink"><a href="isnt-working.php">I have a problem</a></div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>