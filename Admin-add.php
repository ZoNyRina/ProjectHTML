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
        <link rel="stylesheet" href="Part3.css">
    </head>
    <body>
        <br> 
        <h2 class="textfortripplaner">Bonjour <?=$gender_sent?> <?=$lastname_sent?>!! Vous pouvez ajouter les informations sur votre voyage !!</h2>
        <br> 
        <div class="FillTab">
            <form action="Admin-confirm.php">
            <label>Créateur du voyage :</label>
            <div class=planername><?=$gender_sent?> <?=$firstname_sent?> <?=$lastname_sent?></div>
            <br>
            <label>Lieu du voyage :</label>
            <br>
            <input type="text" name="place" placeholder="Lieu">
            <br>
            <label>La date du voyage :</label>
            <br>
            <input type="date" name="tripdate" placeholder="mm/jj/aaaa">
            <br>
            <label>La durée :</label>
            <br>
            <input type="text" name="duration" placeholder="nombre de jour">
            <br>
            <label>Le résumer du voyage :</label>
            <br>
            <textarea type="text" name="summary" placeholder="description"></textarea>
            <br>
            <input type="submit">
        </div>
    </form>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>