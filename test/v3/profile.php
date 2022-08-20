<?php
//Ouverture de la session
session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'header.php'; 

//Importer la vérification de session active avant de donner accès à la page
require 'session_check.php';

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require 'db.php';

//Récupérer l'ID de l'utilisateur s'il existe, ainsi que toutes les variables de session nécessaires
//L'acollade de cette condition se ferme au bas de la page html
if(isset($_SESSION['Pseudo']) AND isset($_GET['user']))
{
    //Récupérer les données de l'utilisateur
    $requser = $pdo->prepare("SELECT * FROM omega_membre WHERE Pseudo = ?");
    $requser->execute(array($_GET['user']));

    $userinfo =  $requser->fetch();   

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>
    
        <div align="center">
            <h2>Bienvenue, <?php echo $userinfo['Prenom']; ?></h2>
            <br/><br/>
            Pseudo = <?php echo $userinfo['Pseudo']; ?>
            <br/>
            Email = <?php echo $userinfo['Email']; ?>

            <br>

            <!--Afficher seulement les données correspodant à l'utilisateur connecté-->
            <?php
                //Vérifier si la session a été lancée et si l'utilisateur saisi correspond à la variable de session invoquée
                if(isset($_SESSION['Pseudo']) AND $userinfo['Pseudo'] == $_SESSION['Pseudo'])
                {
            ?>
                    <a href="editionprofile.php">Editer mon profile</a>
                    <a href="deconnexion.php">Se déconnecter</a>
            <?php
                }
            ?>
                

        </div>
    
</html>
<?php
}

