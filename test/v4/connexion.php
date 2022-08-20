<?php

//Vérifier si aucune session n'est ouverte
if(isset($_SESSION['Pseudo'])){
    //require 'logout.php';
    //Destruction de toutes les variables de session
    require_once 'logout.php';
}




session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'header.php';    

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require 'db.php';



//Validation du formulaire en php
//Vérifier si le boutton a été cliqué
if (isset($_POST['formconnexion']))
{
    //Nettoyer les entrées pour éviter les injections de codes des hackers
    $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
    
    //Cripter le mot de passe
    $mdpconnect = sha1($_POST['mdpconnect']);
    

    //Vérifier si tous champs ont bien été remplis
    if(!empty($_POST['pseudoconnect']) AND !empty($_POST['mdpconnect']))
    {
        //Vérifier si le pseudo et le mot de passe existe dans la BDD
        $requser = $pdo->prepare("SELECT * FROM omega_membre WHERE Pseudo = ? AND Pass = ?");
        $requser -> execute(array($pseudoconnect, $mdpconnect));
        $userexist = $requser->rowCount(); //Compte le nombre d'enregistrement où le pseudo a été trouvé et retourne un integer

    //Si l'utlisateur existe, 
    if($userexist == 1)
    {
        //Faire correspondre l'utilisateur trouvé à l'enregistrement à exploiter
        // $userinfo représente l'enregistrement tout entier
        $userinfo =  $requser->fetch();

        //Récupérer les variables de la session à travers les différentes colonnes de l'enregistrement trouvé
        $_SESSION['IDMembre'] = $userinfo['IDMembre'];
        $_SESSION['Prenom'] = $userinfo['Prenom'];
        $_SESSION['Pseudo'] = $userinfo['Pseudo'];
        $_SESSION['Email'] = $userinfo['Email'];

        //Rediriger l'utilisateur vers sa page de profile qui correspond à l'user connecté
        header("Location:my-omega.php?user=".$_SESSION['Pseudo']);
        ob_end_flush(); //Prévient des erreurs de redirection; doit utilisé avec ob_start() juste avant l'appel au fichier du header
        
    }

    //Sinon, renvoyer un message d'erreur
    else
    {
        $erreur = "Identifiants incorrects! Veuillez vérifier votre pseudo ou mot de passe.";
    }
    }
    //Sinon, renvoyer un message d'erreur
    else
    {
        //echo "Erreur";
        $erreur = "Veuillez remplir tous les champs obligatoires avant de continuer!";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div align="center">
        <h2>Connexion</h2>
        <br/><br/>
        <!--Afficher le message d'erreur au-dessus du formulaire en cas de champ obligatoire vide-->
        <?php
            if(isset($erreur))
            {
                //Afficher le message d'erreur
                echo '<div class="alert alert-danger" role="alert">'.$erreur.'</div>';
            }
        ?>
        <!-- Formulaire de connexion-->
        <div class="form-group">
            <form method="POST" action="" >
                <input type="text" id="pseudoconnect" placeholder="Votre pseudo" name="pseudoconnect" value="<?php if(isset($pseudoconnect)){echo $pseudoconnect;} ?>"/>
                <input type="password" id="mdpconnectconnect" placeholder="Votre mot de passe" name="mdpconnect"/>
                <input type="submit" name="formconnexion" value="Se connecter"/>
                <br /><br />
                <div>Pas encore membre? <a href="register.php"><i>Enregistrez-vous maintenant!</i></a></div> 
            </form>
        </div>
    </div>
</body>
</html>