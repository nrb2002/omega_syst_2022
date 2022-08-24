<?php

//Vérifier si aucune session n'est ouverte
if(!isset($_SESSION['Pseudo'])){
    header("location:index.php");
}

