<?php 

require 'header.php';

//Importer la connexion vers la BDD
require 'db.php';

//Validation du formulaire en php

//Vérifier si le boutton a été cliqué
if (isset($_POST['forminscription']))
{
//Nettoyer les entrées pour éviter les injections de codes des hackers
$prenom = htmlspecialchars($_POST['prenom']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$mail = htmlspecialchars($_POST['mail']);
$mail2 = htmlspecialchars($_POST['mail2']);

//Vérifier si tous champs ont bien été remplis
//echo "OK";
if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) )
{
    //echo "OK";            
    
    //Cripter le mot de passe
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    //Vérifier si le pseudo a plus de 255 caractères
    $pseudolength = strlen($pseudo);
    if ($pseudolength <= 255)
    {
        //Vérifier si le pseudo existe déjà dans la BDD
        $reqpseudo = $pdo->prepare("SELECT * FROM omega_membre WHERE Pseudo = ?");
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
                    $reqmail = $pdo->prepare("SELECT * FROM omega_membre WHERE Email = ?");
                    $reqmail -> execute(array($mail));
                    $mailexist = $reqmail->rowCount(); //Compte le nombre d'enregistrement où l'email a été trouvé et retourne un integer

                    //Si l'adresse email saisie n'existe pas, procéder à l'insertion dans la BDD
                    if($mailexist == 0)
                    {
                        //Vérifier si les mots de passe fournis correspondent
                        if ($mdp == $mdp2)
                        {
                            //echo "Nickel";
                            //Si tout va bien, insérer les données dans la BDD
                            $insertmbr = $pdo -> prepare("INSERT INTO omega_membre(Prenom, Pseudo, Email, Pass) VALUES(?, ?, ?, ?)");
                            $insertmbr -> execute(array($prenom, $pseudo, $mail, $mdp));
                            $erreur = "Membre enregistré avec succès! <a href=\"connexion.php\">Accéder au compte?</a>";

                            //Variable session de l'utilisateur nouvellement créé
                            //$_SESSION['comptecree'] = "Membre enregistré avec succès!";

                            //Rediriger l'utilisateur vers la page d'accueil du site après création du compte
                            //header('Location: index.php');
                        }
                        //Sinon, renvoyer un message d'erreur
                        else
                        {
                            $serreur = "Les deux champs de mot de passe ne correspondent pas!";
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
        $erreur =  "Votre pseudo ne doit pas dépasser 255 caractères";
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
<title>Inscription</title>
</head>
<body>
<div align="center">
<h2>Inscription</h2>
<br/><br/>
<!--Afficher le message d'erreur au-dessus du formulaire en cas de champ obligatoire vide-->
<?php
    if(isset($erreur))
    {
        //Afficher le message d'erreur
        echo '<div class="alert alert-danger" role="alert">'.$erreur.'</div>';
    }
?>
        <!-- Formulaire d'inscription-->
        <form method="POST" action="" >
            <table >
                <tr>
                    <td align="right">
                        <label for="prenom">Prénom</label>
                    </td>
                    <td >
                        <input type="text" id="pseudo" placeholder="Votre Prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="right">
                        <label for="pseudo">Pseudo</label>
                    </td>
                    <td >
                        <input type="text" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>">
                    </td >
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail">Mail</label>
                    </td>
                    <td >
                        <input type="email" id="mail" placeholder="Votre mail" name="mail" autocomplete="off" value="<?php if(isset($mail)){ echo $mail; } ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail2">Confirmation de mail</label>
                    </td>
                    <td>
                        <input type="email" id="mail2" placeholder="Confirmez votre mail" name="mail2" value="<?php if(isset($mail2)){ echo $mail2;}?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp">Mot de passe</label>
                    </td>
                    <td>
                        <input type="password" id="mdp" placeholder="Votre mot de passe" name="mdp">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp2">Confirmation de mot de passe</label>
                    </td>
                    <td>
                        <input type="password" id="mdp2" placeholder="Confirmez le mot de passe" name="mdp2">
                    </td>
                </tr>

                <br/>
                <tr>
                    <td></td>
                    <br/>
                    <td>
                        <input type="submit" name="forminscription" value="Je m'inscris"/>
                    </td>
                </tr>
                
            
            </table>
            
            
            
            
        </form>

        

    </div>
</body>
</html>