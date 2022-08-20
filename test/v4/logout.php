<?php
session_start();

//Destruction de toutes les variables de session
$_SESSION = array();
session_destroy();

//Rediriger l'utlisateur sur la page choisie
header("Location: connexion.php");

if(isset("location:connexion.php")){
    //Destruction de toutes les variables de session
    $_SESSION = array();
    session_destroy();
}

?>