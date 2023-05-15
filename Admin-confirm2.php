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

try {
    error_log("Connecting to DB\n", 0);
    $dbhost = 'localhost';
    $dbname = 'projectmyadminzo';
    $dbuser = 'root';
    $dbpass = '';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $sql = "INSERT INTO `devoir` (`gender`, `lastname`, `firstname`, `role`, `tripdate`, `duration`, `summary`, `place`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    $pdo->beginTransaction();
    $stmt->execute([$gender_sent, $lastname_sent, $firstname_sent, $role_sent, $tripdate_sent, $duration_sent, $summary_sent, $place_sent]);
    $pdo->commit();

} catch (Exception $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    error_log("Cannot connect to DB\n", 0);
}
?>
<html>
    <head>
        <link rel="stylesheet" href="Part3.css">
    </head>
    <body>
        <br>
        <br>
        <div class="beforeconfirm1">
            <br>
            <br>
            <p class="beforeconfirm2"> Les informations que vous avez fournies ont été enregistrés avec succès !! <p>
            <br>
            <br>
            <p class="beforeconfirm2"> <?=$gender_sent?> <?=$lastname_sent?> Voulez-vous <p> 
            <br> 
            <br>
            <div class="optionlink"><a href="Admin-add.php">Ajouter un autre voyage</a></div>
            <br>
            <p class="beforeconfirm2"> ou <p>
            <br>
            <div class="optionlink"><a href="All-adventures.php">Voir la liste des voyages</a></div>
            <br>
            <br>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>