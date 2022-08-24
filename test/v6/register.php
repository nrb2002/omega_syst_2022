<?php 

require 'includes/header.php';

//Importer la connexion vers la BDD
require 'includes/db.php';

//Validation du formulaire en php

//Vérifier si le boutton a été cliqué
if (isset($_POST['forminscription']))
{
//Nettoyer les entrées pour éviter les injections de codes des hackers
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$tel1 = htmlspecialchars($_POST['tel1']);
$tel2 = htmlspecialchars($_POST['tel2']);
$mail = htmlspecialchars($_POST['mail']);
$mail2 = htmlspecialchars($_POST['mail2']);
//Cripter le mot de passe
$mdp = sha1($_POST['mdp']);
$mdp2 = sha1($_POST['mdp2']);

//Vérifier si tous champs ont bien été remplis
if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) )
{
    //Vérifier si le pseudo a plus de 255 caractères
    $pseudolength = strlen($pseudo);
    if ($pseudolength <= 12)
    {
        //Vérifier si le pseudo existe déjà dans la BDD
        $reqpseudo = $pdo->prepare("SELECT * FROM omega_user WHERE Pseudo = ?");
        $reqpseudo -> execute(array($pseudo));
        $pseudoexist = $reqpseudo->rowCount(); //Compte le nombre d'enregistrement où le pseudo a été trouvé et retourne un integer

        //Si le pseudo n'existe pas, procéder à l'insertion dans la BDD
        if($pseudoexist == 0)
        {
            //Vérifier si les deux adresses emails fournies correspondent
            if ($mail == $mail2)
            {
                //Vérifier si l'email saisie est valide
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    //Vérifier si l'adresse email existe déjà dans la BDD
                    $reqmail = $pdo->prepare("SELECT * FROM omega_user WHERE Email = ?");
                    $reqmail -> execute(array($mail));
                    $mailexist = $reqmail->rowCount(); //Compte le nombre d'enregistrement où l'email a été trouvé et retourne un integer

                    //Si l'adresse email saisie n'existe pas, procéder à l'insertion dans la BDD
                    if($mailexist == 0)
                    {
                        //Vérifier si les mots de passe fournis correspondent
                        if ($mdp == $mdp2)
                        {
                            //Si tout va bien, insérer les données dans la BDD
                            $insertmbr = $pdo -> prepare("INSERT INTO omega_user(Pseudo, Pass, NomUser, PrenomUser, TelUser1, TelUser2, EmailUser) VALUES(?, ?, ?, ?, ?, ?, ?)");
                            $insertmbr -> execute(array($pseudo, $mdp, $nom, $prenom, $tel1, $tel2, $mail));
                            $success = "Membre enregistré avec succès!"." <a href=\"login.php\">"."Accéder au compte?"."</a>"." <a href=\"index.php\">"."Retour à la page d'acceuil"."</a>";    
                        }
                        //Sinon, renvoyer un message d'erreur
                        else
                        {
                            $erreur = "Les deux champs de mot de passe ne correspondent pas!";
                        }
                    }
                    //Sinon l'adresse email existe déjà, renvoyer un message d'erreur
                    else
                    {
                        $erreur = "Adresse email déjà utilisée!";
                    }                        
                }
                else
                {
                    $erreur = "Adresse email invalide!";
                }
            }
            else
            {
                $erreur = "Les deux champs d'adresse email ne correspondent pas!";
            }
        }
        else
        {
            $erreur = "Pseudo déjà utilisé!";
        }
    }
    else
    {
        $erreur =  "Votre pseudo ne doit pas dépasser 12 caractères";
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

<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription - Omega System</title>
    </head>

    <body>
        <div align="center">
        <h2>Inscription</h2>
        <br/><br/>
<!--Afficher le message de confirmation ou d'erreur au-dessus du formulaire-->
<?php
    if(isset($erreur))
    {
        //Afficher le message d'erreur
        echo '<div class="alert alert-danger" role="alert">'.$erreur.'</div>';
    }
    if(isset($success)){
        //Afficher le message confirmation
        echo '<div class="alert alert-success" role="alert">'.$success.'</div>';
    }
?>
        <!-- Formulaire d'inscription-->
        <form method="POST" action="" >
            <table >
                <tr>
                    <td align="left">
                        <label for="prenom">Prénom</label>
                    </td>
                    <td >
                        <input type="text" id="pseudo" placeholder="Votre Prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="left">
                        <label for="nom">Nom</label>
                    </td>
                    <td >
                        <input type="text" id="nom" placeholder="Votre nom de famille" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="left">
                        <label for="pseudo">Pseudo</label>
                    </td>
                    <td >
                        <input type="text" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="left">
                        <label for="mail">Adresse email</label>
                    </td>
                    <td >
                        <input type="email" id="mail" placeholder="Votre adresse email" name="mail" autocomplete="off" value="<?php if(isset($mail)){ echo $mail; } ?>">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="mail2">Confirmation de mail</label>
                    </td>
                    <td>
                        <input type="email" id="mail2" placeholder="Confirmez votre mail" name="mail2" value="<?php if(isset($mail2)){ echo $mail2;}?>">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="mdp">Mot de passe</label>
                    </td>
                    <td>
                        <input type="password" id="mdp" placeholder="Votre mot de passe" name="mdp">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="mdp2">Confirmation de mot de passe</label>
                    </td>
                    <td>
                        <input type="password" id="mdp2" placeholder="Confirmez le mot de passe" name="mdp2">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="tel1">Téléphone 1</label>
                    </td>
                    <td >
                        <input type="text" id="tel1" placeholder="Votre numéro de téléphone" name="tel1" value="<?php if(isset($tel1)){ echo $tel1; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="left">
                        <label for="tel2">Téléphone 2</label>
                    </td>
                    <td >
                        <input type="text" id="tel2" placeholder="Votre deuxième numéro de téléphone" name="tel2" value="<?php if(isset($tel2)){ echo $tel2; }?>">
                    </td >
                </tr>

                <br/>
                <tr>
                    <br/><br/>
                    <td align="center">
                        <input type="submit" name="forminscription" value="Je m'inscris"/>
                    </td>
                    
                </tr>
                
            
            </table>
            
            
            
            
        </form>

        

    </div>
</body>
</html>