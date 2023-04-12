<?php

session_start ();

unset($_SESSION["gender"], $_SESSION["lastname"], $_SESSION["firstname"], $_SESSION["role"]);
header("location: index2.php");

?>