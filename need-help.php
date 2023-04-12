<?php include 'Includes/Header.php' ; ?>
<?php
session_start();

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
?>

<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
    </head>
    <!--STYLE DIV PHONENUMBER-->
    <style>
        .phonenumber {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            border-radius:5px;
            background-color: #F0F3F6;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            color: black;
        }
    </style>
    <body>
        <br>
        <br>

        <button class="logoutbutton"><a href="Logout.php">Log Out</a></button>
        <br>
        <br>
        <br>
        <br>
        <h2 class="emailtext">Bonjour <?=$gender_sent?> <?=$lastname_sent?>!!</h2>
        <h2 class="emailtext">Vous êtes invité à confirmer votre numéro de téléphone</h2>
        <br>
        <br>
        <br>
        <br>

        <div class="newaccountdiv">
            <br>
            <label><?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?> : </label>
            <input class=phonenumber type="text" name="phonenumber" placeholder = "Enter your phone number">
            <input type="submit">
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