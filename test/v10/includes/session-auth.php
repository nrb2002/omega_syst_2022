<?php

//Vérifier si aucune session n'est ouverte
if(!isset($_SESSION['Pseudo'])){
    echo 'Access denied!';
    header("location:index");
    exit();
}

