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
            <?php 
            try {
    error_log("Connecting to DB\n", 0);
    $dbhost = 'localhost';
    $dbname = 'projectmyadminzo';
    $dbuser = 'root';
    $dbpass = '';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT gender, lastname, firstname, role, tripdate, duration, summary, place FROM devoir";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $stmt->bindColumn('gender',$gender);
    $stmt->bindColumn('lastname',$lastname);
    $stmt->bindColumn('firstname',$firstname);
    $stmt->bindColumn('role',$role);
    $stmt->bindColumn('tripdate',$tripdate);
    $stmt->bindColumn('duration',$duration);
    $stmt->bindColumn('summary',$summary);
    $stmt->bindColumn('place',$place);
    
    while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
        echo "<tr>";
        echo "<br> <u><h2>" . $place . "</h2></u>"; 
        echo "<div>Date :" . " " . $tripdate . "</div>";
        echo "<div>Durée :" . " " . $duration . "</div> <br>";
        echo "<b>Summary</b> <br> <p> Un voyage créer et superviser par" . " " . $gender . " " . $firstname . " " . $lastname . "." . "</p>";
        echo "$summary";
        echo "</tr>";
    }

} catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    error_log("Cannot connect to DB\n", 0);
    die();
}
?>
            </div>
        </div>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>