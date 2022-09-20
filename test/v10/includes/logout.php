<?php
session_start();

//Destruction de toutes les variables de session
$_SESSION = array();

//Désactivation de la session
session_unset();

//Destruction de la session
session_destroy();

//Rediriger l'utlisateur sur la page choisie
header("Location: ../login");

?>