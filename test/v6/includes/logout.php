<?php
session_start();

//Destruction de toutes les variables de session
$_SESSION = array();
session_unset();
session_destroy();

//Rediriger l'utlisateur sur la page choisie
header("Location: ../login");

?>