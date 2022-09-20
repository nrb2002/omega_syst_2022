<?php
//Vérifier si aucune session n'est ouverte
if(!isset($_SESSION['Pseudo'])){
    

session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'includes/header.php';    

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require 'includes/db.php';

//Validation du formulaire en php
//Vérifier si le boutton a été cliqué
if (isset($_POST['formconnexion']))
{
    //Nettoyer les entrées pour éviter les injections de codes des hackers
    $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
    
    //Cripter le mot de passe
    $passwd = sha1($_POST['passwd']);
    

    //Vérifier si tous champs ont bien été remplis
    if(!empty($_POST['pseudoconnect']) AND !empty($_POST['passwd']))
    {
        //Vérifier si le pseudo et le mot de passe existe dans la BDD
       // Construire une requête sur toutes les tables concernées pas la session
        $requser = $pdo->prepare(
            "SELECT omega_user.*, omega_fonction.LibFonction as Fonction, omega_pays.NationalitePays as Nationalite, omega_pays.NomPays as PaysResidence, 
                    omega_entreprise.*, omega_secteur.LibSecteur as Secteur, omega_siege.*, omega_pays.NomPays as PaysSiege, 
                    omega_banque.NomBanque as Banque, omega_banque.CodeSwiftBanque as CodeSwift,
                    omega_dossier.*
            FROM omega_user  
                LEFT JOIN omega_fonction ON omega_user.Fonction_ID = omega_fonction.IDFonction 
                LEFT JOIN omega_pays ON omega_user.PaysResidence_ID = omega_pays.IDPays 
                LEFT JOIN omega_entreprise ON omega_entreprise.User_ID = omega_user.IDUser 
                    LEFT JOIN omega_secteur ON omega_entreprise.Secteur_ID = omega_secteur.IDSecteur
                    LEFT JOIN omega_banque ON omega_entreprise.Banque_ID = omega_banque.IDBanque
                    LEFT JOIN omega_siege ON omega_entreprise.IDEse = omega_siege.Entreprise_ID
                    LEFT JOIN omega_dossier ON omega_entreprise.IDEse = omega_dossier.Entreprise_ID
                        

                WHERE Pseudo = ? AND Pass = ?"
            );
        $requser -> execute(array($pseudoconnect, $passwd));
        $userexist = $requser->rowCount(); //Compte le nombre d'enregistrement où le pseudo a été trouvé et retourne un integer

    //Si l'utlisateur existe, 
    if($userexist == 1)
    {
        //Faire correspondre l'utilisateur trouvé à l'enregistrement à exploiter
        // $userinfo représente l'enregistrement tout entier
        $userinfo =  $requser->fetch();

        //Récupérer les variables de la session à travers les différentes colonnes de l'enregistrement trouvé

        //Informations de l'utilisateur
        $_SESSION['IDUser'] = $userinfo['IDUser'];
        $_SESSION['NomUser'] = $userinfo['NomUser'];
        $_SESSION['PrenomUser'] = $userinfo['PrenomUser'];
        $_SESSION['Pseudo'] = $userinfo['Pseudo'];
        $_SESSION['EmailUser'] = $userinfo['EmailUser'];
        $_SESSION['TelUser1'] = $userinfo['TelUser1'];
        $_SESSION['TelUser2'] = $userinfo['TelUser2'];
        $_SESSION['PhotoUser'] = $userinfo['PhotoUser'];
        $_SESSION['RueUser'] = $userinfo['RueUser'];
        $_SESSION['NumResidenceUser'] = $userinfo['NumResidenceUser'];
        $_SESSION['QuartierUser'] = $userinfo['QuartierUser'];
        $_SESSION['CommuneUser'] = $userinfo['CommuneUser'];
        $_SESSION['VilleUser'] = $userinfo['VilleUser'];
        $_SESSION['ProvinceUser'] = $userinfo['ProvinceUser'];
        $_SESSION['PaysResidence'] = $userinfo['PaysResidence'];

        //Informations sur l'entreprise
        //$_SESSION['LogoEse'] = $userinfo['LogoEse']; //Logo
        $_SESSION['NomEse'] = $userinfo['NomEse']; //Dénomination
        $_SESSION['SigleEse'] = $userinfo['SigleEse'];
        $_SESSION['ObjetEse'] = $userinfo['ObjetEse'];
        $_SESSION['FormeEse'] = $userinfo['FormeEse'];
        $_SESSION['CategorieEse'] = $userinfo['CategorieEse']; //Micro, Petite, Moyenne, ou Grande Entreprise
        $_SESSION['DateCreatEse'] = $userinfo['DateCreatEse']; //Date de création de l'entreprise
        $_SESSION['CapitalEse'] = $userinfo['CapitalEse'];
        $_SESSION['ChiffreAffEse'] = $userinfo['ChiffreAffEse'];
        $_SESSION['EmailEse'] = $userinfo['EmailEse'];
        $_SESSION['SiteWebEse'] = $userinfo['SiteWebEse'];
        $_SESSION['TelephoneEse'] = $userinfo['TelephoneEse'];
        $_SESSION['CouvertureGeoEse'] = $userinfo['CouvertureGeoEse']; //Couverture géographique
        $_SESSION['LibSecteur'] = $userinfo['LibSecteur']; //Secteur d'activités
        $_SESSION['NbreSalariesEse'] = $userinfo['NbreSalariesEse']; //Nombre de salariés
        $_SESSION['NbreTemporairesEse'] = $userinfo['NbreTemporairesEse'];
        $_SESSION['NbreJournaliersEse'] = $userinfo['NbreJournaliersEse'];

        //Informations sur les documents fiscaux de l'entreprise
        $_SESSION['RCCM_Num'] = $userinfo['RCCM_Num'];
        $_SESSION['IdNat_Num'] = $userinfo['IdNat_Num'];
        $_SESSION['Impot_Num'] = $userinfo['Impot_Num'];
        $_SESSION['CNSS_Num'] = $userinfo['CNSS_Num'];

        
        //Informations bancaires
        $_SESSION['CompteBancaireEse'] = $userinfo['CompteBancaireEse'];
        $_SESSION['Banque'] = $userinfo['Banque'];
        $_SESSION['CodeSwift'] = $userinfo['CodeSwift'];
        
                                                        

        //Rediriger l'utilisateur vers sa page de profile qui correspond à l'user connecté
        //header("Location:user/my-omega.php?user=".$_SESSION['Pseudo']);
        header("Location:my-omega?user=".$_SESSION['Pseudo']);
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
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Omega System</title>
</head>
<body>
    <div align="center">
        <div class="row mt-5">
            <h3>Accéder à votre espace myOmega</h3>
        </div>
        
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
            <div class="col-6 shadow p-4 rounded bg-light" data-animation="slideHorz">                
                <form method="POST" action="" >
                    <!--user login form fields-->
                    <div class="row mt-4 justify-content-center">
                        <div class="col-4">Pseudo</div>
                        <div class="col-6">
                            <input type="text" id="pseudoconnect" placeholder="Votre pseudo" name="pseudoconnect" value="<?php if(isset($pseudoconnect)){echo $pseudoconnect;} ?>"/>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center"> 
                        <div class="col-4">
                            <label for="passwd">Mot de passe</label>
                        </div>                       
                        <div class="col-6">
                           <input type="password" id="passwd" placeholder="Votre mot de passe" name="passwd"/>                         
                        </div>
                    </div>
                    <!--terms and conditions-->
                    <div class="form-row mt-2" for="ok">
                        <input class="" type="checkbox" name="ok" id="ok" required><small> J'ai lu et j'accepte les <a href="#">termes et conditions</a> </small>
                    </div>
                    <!--login button-->
                    <div class="form-row row mt-2 justify-content-center">
                        <div class="col-10">
                            <input type="submit" name="formconnexion" value="Connexion"/>
                        </div>
                        
                    </div>
                    
                    <!--Unable to login-->
                    <div class="form-row mt-4 ">
                        <small><i><a href="#">Pseudo ou mot de passe oublié?</a></i></small>                                            
                    </div>
                    <!--Register-->
                    <div class="form-row mt-2 ">            
                        <small>Pas encore membre? <a href="register.php"><i>Enregistrez-vous maintenant!</i></small></a>
                    </div>
                </form>
            </div>

<?php
}
else{
    //require 'logout.php';
    //Destruction de toutes les variables de session
    //require 'includes/logout';
    header("Location:my-omega?user=".$_SESSION['Pseudo']);

    
}


require 'includes/footer.php';











       