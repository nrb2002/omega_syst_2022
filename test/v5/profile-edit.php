<?php
session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'header.php';  

//Importer la vérification de session active avant de donner accès à la page
require 'session-auth.php';

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require 'db.php';

//Récupérer l'ID de l'utilisateur s'il existe, ainsi que toutes les variables de session nécessaires
//L'acollade de cette condition se ferme au bas de la page html
//if(isset($_SESSION['Pseudo']) AND $_GET['user'] > 0)
if(isset($_SESSION['Pseudo']) )
{
    //Récupérer les données de l'utilisateur
    $requser = $pdo->prepare("SELECT * FROM omega_membre WHERE Pseudo = ?");
    $requser->execute(array($_SESSION['Pseudo']));

    //Retrouver l'enregistrer correspondant à l'utilisateur actif
    $user =  $requser->fetch();

    //Vérifier si le champ n'est pas vide est que l'adresse email saisie est différente
    if((isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['Email']) )
    {
        
        //Sécuriser les valeurs recueillies dans les champs de saisie des valeurs à modifier
        $newmail = htmlspecialchars($_POST['newmail']);

        //Vérifier si l'email saisie est valide
        if(filter_var($newmail, FILTER_VALIDATE_EMAIL))
        {
            //Vérifier si l'adresse email existe déjà dans la BDD
            $reqmail = $pdo->prepare("SELECT * FROM omega_membre WHERE Email = ? AND Pseudo != ? ");
            $reqmail -> execute(array($newmail, $_SESSION['Pseudo']));
            $mailexist = $reqmail->rowCount(); //Compte le nombre d'enregistrement où l'email a été trouvé et retourne un integer

            //Si l'adresse email saisie n'existe pas, procéder à l'insertion dans la BDD
            if($mailexist == 0)
            {

                //Mettre à jour la BDD avec les nouvelles informations
                $updateemail = $pdo->prepare("UPDATE omega_membre SET Email=? WHERE Pseudo = ?");
                $updateemail->execute(array($newmail, $_SESSION['Pseudo']));  
                
                //Rédiriger l'utilisateur vers la page de profile
                header('Location: my-omega.php?user='.$_SESSION['Pseudo']);
            }
            else
            {
                $erreur = "Adresse email déjà utilisée!";   
            }
        }

        else
        {
            $erreur = "Echec de mise à jour! Adresse email non valide.";   
        }

    }

    //Vérifier si le champ n'est pas vide est que le email mot de passe est différent
    if (isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND $_POST['newmdp'] != $user['Pass']) 
    {
        
        //Sécuriser la donnée recueillie dans le champ mot de passe
        $newmdp = htmlspecialchars($_POST['newmdp']);
        
        //Cripter le mot de passe
        $newmdp = sha1($_POST['newmdp']);
        $newmdp2 = sha1($_POST['newmdp2']);

        if ($newmdp == $newmdp2)
        {
            //Mettre à jour la BDD avec les nouvelles informations
            $updatemdp = $pdo->prepare("UPDATE omega_membre SET Pass=? WHERE Pseudo = ?");
            $updatemdp->execute(array($newmdp, $_SESSION['Pseudo']));
            
            //Rédiriger l'utilisateur vers la page de profile
            header('Location: my-omega.php?user='.$_SESSION['Pseudo']);
        }
        else
        {
            $erreur = "Veuillez vérifier le mot de passe!";   
        }

        
        
        
    }

    //Vérifier si le champ n'est pas vide est que le email mot de passe est différent
    if (isset($_POST['pseudo']) AND $_POST['pseudo'] == $user['Pseudo']) 
    {
        //Rédiriger l'utilisateur vers la page de profile
        header('Location: my-omega.php?user='.$_SESSION['Pseudo']);
    }
       


?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>
    <body>
        <div align="center">
            <h2>Edition de mon profile</h2>

            <!-- Afficher le message d'erreur au-dessus du formulaire en cas de besoin -->
            <?php if(isset($erreur)){
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
                            <input type="text" id="prenom" name="prenom"  value="<?php echo $user['Prenom']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="pseudo">Pseudo</label>
                        </td>
                        <td >
                            <input type="text" id="pseudo" name="pseudo" value="<?php echo $user['Pseudo']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="newmail">Modifier l'adresse email</label>
                        </td>
                        <td >
                            <input type="email" id="newmail" placeholder="Votre mail" name="newmail" value="<?php echo $user['Email']; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="newmdp">Modifier le mot de passe</label>
                        </td>
                        <td>
                            <input type="password" id="newmdp" placeholder="Votre mot de passe" name="newmdp">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="newmdp2">Confirmation du nouveau mot de passe</label>
                        </td>
                        <td>
                            <input type="password" id="newmdp2" placeholder="Confirmez le mot de passe" name="newmdp2">
                        </td>
                    </tr>

                    <br/>
                    <tr>
                        <td></td>
                        <br/>
                        <td>
                            <input type="submit" name="formeditionprofile" value="Mettre à jour mon profile"/>
                        </td>
                    </tr>
                
                </table>              
                
            </form>
        </div>
    </body>
</html>
<?php
}
else
{
    header("Location:connexion.php");
}
