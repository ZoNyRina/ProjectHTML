<?php 
session_start();
include 'Includes/Header.php' ;
$mailadress_sent = $_GET["mailadress"];

$gender_sent = $_SESSION["gender"];
$lastname_sent = $_SESSION["lastname"];
$firstname_sent = $_SESSION["firstname"];
$role_sent = $_SESSION["role"];
?>

<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
    </head>
<!--STYLE DIV ADRESSMAIL-->
    <style>
        .adressmail {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            border-radius:5px;
            background-color: rgb(6, 125, 223);
            width: 500px;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
    </style>
    <body>
        <br>
        <br>

        <button class="logoutbutton"><a href="Logout.php">Log Out</a></button>

        <br>
        <br>
        <h2 class="emailtext">Toujours à votre service <?=$gender_sent?> <?=$lastname_sent?>!!</h2>
        <h2 class="emailtext">Envoyez-nous un mail !!</h2>
        <br>
        <form action="success.php">
            <div class="newaccountdiv">
                <br>
                <label>Votre adresse mail :</label>
                <div class=adressmail><?=$mailadress_sent?></div>
                <div><textarea type="text" name="description" placeholder="Entrez votre text"></textarea></div>
                <input type="submit">
                <br>
                <br>
                </div>
        </form>
        <br>
        <br>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>