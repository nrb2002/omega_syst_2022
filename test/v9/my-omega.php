<?php

//Ouverture de la session
session_start(); //Ouverture de la session

//Vérifier si aucune session n'est ouverte
if(!isset($_SESSION['Pseudo'])){
    header("location:includes/logout");
}

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'includes/header.php'; 

//Importer la vérification de session active avant de donner accès à la page
require 'includes/session-auth.php';

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require 'includes/db.php';

?>

<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myOmega - Omega System</title>

        <!-- Favicon icon -->
        <link rel="icon" href="../../assets/images/logo_icon.png" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    </head>

    <body>
        <!-- Welcome Nav -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light border shadow">
            <div class="container-fluid">
                <span class="navbar-text text-center"><i><?php echo 'Bienvenue, '.$_SESSION['PrenomUser']; ?></i></span>
                <ul class="nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="profile-edit">Profile</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="includes/logout">Se déconnecter</a></li>                
                </ul>    
            </div> 
                              
        </nav>
                
        <!-- Nav container -->
        <div class="container">
            <div class="container-fluid row-sm navcontainer border bg-light shadow-sm p-2" >
                <!-- Navtab links -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Informations de base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contactInfo-tab" data-toggle="tab" href="#contactInfo" role="tab" aria-controls="contactInfo" aria-selected="false">Coordonnées</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false">Appels d'offres</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">Finances</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" id="contracts-tab" data-toggle="tab" href="#contracts" role="tab" aria-controls="contracts" aria-selected="false">Contrats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">
                                99+                                
                            </span>        
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="container">            
                    <div class="tab-content">

                        <!--Basic Info tab pane-->
                        <div class="tab-pane active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                            <div class="row g-2">
                                
                                <!--Basic Info data-->
                                <div class="col border bg-light p-2">
                                    <h5 class="text-danger">Identité de l'entité</h5>
                                    <!--Logo-->
                                    <div class="row ">
                                        <div class="col-sm-6 p-2 m-auto">
                                            <img src="<?php echo $_SESSION['PhotoUser']; ?>" alt="Logo" width="250px">
                                        </div>                                                      
                                    </div>
                                    <div class="row justify-content-center">
                                        <button class="btn btn-primary m-2 " type="submit" >Modifier</button>
                                    </div>
                                    <hr>

                                    <!--Business Basic Info-->
                                    <div class="row">
                                        <div class="col ">
                                            <table class="table table-hover table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Dénomination </th>
                                                        <td><?php echo $_SESSION['NomEse']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sigle </th>
                                                        <td><?php echo $_SESSION['SigleEse']; ?></td>                                                        
                                                    </tr>                                                    
                                                    <tr>
                                                        <th scope="row">Numéro RCCM</th>
                                                        <td><?php echo $_SESSION['RCCM_Num']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro d'Identification Nationale</th>
                                                        <td><?php echo $_SESSION['IdNat_Num']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro d'Impôt</th>
                                                        <td><?php echo $_SESSION['Impot_Num']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro CNSS</th>
                                                        <td><?php echo $_SESSION['CNSS_Num']; ?></td>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>                                                      
                                    </div>
                                </div>
                                <!--Basic Info data-->

                                <!--Resources data-->
                                <div class="col ml-2">

                                    <!--Financial data-->
                                    <h5 class="text-danger">Données financières</h5>
                                    <div class="row mt-2 border p-2">
                                        <table class="table table-hover table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Chiffre d'affaires annuel en USD</th>
                                                    <td><?php echo $_SESSION['ChiffreAffEse']; ?></td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Capital Social en USD</th>
                                                    <td><?php echo $_SESSION['CapitalEse']; ?></td>                                                        
                                                </tr>
                                                
                                            </tbody>
                                        </table>                                                                                                          
                                    </div>

                                    <!--Edit Financial data button-->
                                    <div class="row justify-content-end">
                                        <button class="btn btn-primary m-2 " type="submit" >Modifier</button>
                                    </div>
                                    <hr>

                                    <!--Personel data-->
                                    <h5 class="text-danger">Ressources humaines</h5>

                                    <div class="row mt-2 border p-2">

                                        <table class="table table-hover table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Effectif total du personnel</th>
                                                    <?php
                                                    $salaries = $_SESSION['NbreSalariesEse'];
                                                    $temporaires = $_SESSION['NbreTemporairesEse'];
                                                    $journaliers = $_SESSION['NbreJournaliersEse'];

                                                    $effectif = $salaries + $temporaires + $journaliers;                                                  
                                                    ?>
                                                    <td><strong><?php echo $effectif; ?></strong></td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Salariés</th>
                                                    <td><?php echo $salaries; ?></td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Temporaires</th>
                                                    <td><?php echo $temporaires; ?></td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Journaliers</th>
                                                    <td><?php echo $journaliers; ?></td>                                                        
                                                </tr>                                                
                                            </tbody>
                                        </table>                                                
                                    </div> 

                                    <!--Edit personel data button-->
                                    <div class="row justify-content-end">
                                        <button class="btn btn-primary m-2 " type="submit" >Modifier</button>
                                    </div>
                                </div>
                                <!--Resources data-->
                        
                            </div>                            
                        </div>
                         <!--Basic Info tab pane-->
                        
                        <!--Contact Info tab pane-->
                        <div class="tab-pane" id="contactInfo" role="tabpanel" aria-labelledby="contactInfo-tab">

                            <div class="row gx-2 p-2">

                                <!--Business Info data-->
                                <div class="col bg-light ">
                                    <div class="row">
                                        <div class="col ml-0 m-2">
                                            <h5 class="text-danger">Coordonnées de l'Entreprise</h5>
                                        </div>
                                        <div class="col-2 justify-content-end p-2 mr-4">
                                            <button class="btn btn-primary" type="submit" >Modifier</button>
                                        </div>
                                    </div> 
                                    
                                    <!-- Business contact -->
                                    <div class="row border m-auto ">                                        
                                        <div class="row">
                                            <div class="col ">
                                                <table class="table table-hover table-borderless">
                                                   <tbody>
                                                        <tr>
                                                            <th scope="row">Téléphone</th>
                                                            <td><?php $_SESSION['TelephoneEse'];?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Adresse électronique</th>
                                                            <td><?php $_SESSION['EmailEse'];?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Site web</th>
                                                            <td><?php echo $_SESSION['SiteWebEse'];?></td>                                                        
                                                        </tr>                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                                      
                                    </div>                                    
                                    <!-- Business contact -->
                                    
                                    <!-- HQ location Business-->
                                    <div class="row border m-auto">
                                        <div class="row p-2 ml-2 bg-success">
                                            <h6>Siège social</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col ">
                                                <table class="table table-hover table-borderless">
                                                    <!--
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    -->
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Rue, Numéro, Quartier, Commune/Territoire/Village</th>
                                                            <td>Bld Sendwe, N° 50, Q/Matonge, C/Kalamu</td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ville</th>
                                                            <td>Kinshasa</td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pays</th>
                                                            <td>République Démocratique du Congo</td>                                                        
                                                        </tr>                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                                      
                                    </div>                                    
                                    <!--HQ location Business-->

                                    <!-- Exploitation location Business-->
                                    <div class="row border m-auto">
                                        <div class="row p-2 ml-2 bg-success">
                                            <h6>Siège d'exploitation</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col ">
                                                <table class="table table-hover table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Rue, Numéro, Quartier, Commune/Territoire/Village</th>
                                                            <td>Rue <?php echo $_SESSION['RueUser'];?>, N°<?php echo $_SESSION['NumResidenceUser']; ?>, Q/<?php echo $_SESSION['QuartierUser']; ?>, C/<?php echo $_SESSION['CommuneUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ville</th>
                                                            <td>Kinshasa</td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pays</th>
                                                            <td>République Démocratique du Congo</td>                                                        
                                                        </tr>                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                                      
                                    </div>                                    
                                    <!--Exploitation location Business-->
                                </div>
                                <!--Business Info data-->

                                <!--Contact Info data-->
                                <div class="col bg-light">
                                    <div class="row">
                                        <div class="col ml-0 pl-0">
                                            <h5 class="text-danger">Coordonnées du Représentant Légal</h5>
                                        </div>
                                        <div class="col-2 justify-content-end p-2 mr-1">
                                            <a href="profile-edit" rel="noopener noreferrer"><button class="btn btn-primary" type="submit" >Modifier</button></a>
                                        </div>
                                    </div>                                    
                                    
                                    <!--Contact Info Local Rep-->
                                    <div class="row border">
                                        <div class="col ">
                                            <table class="table table-hover table-borderless">                                                
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Nom</th>
                                                        <td><?php echo $_SESSION['NomUser']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Prénom</th>
                                                        <td><?php echo $_SESSION['PrenomUser']; ?></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Téléphone 1</th>
                                                        <td><?php echo $_SESSION['TelUser1']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Téléphone 2</th>
                                                        <td><?php echo $_SESSION['TelUser2']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Adresse électronique</th>
                                                        <td><?php echo $_SESSION['EmailUser']; ?></td>                                                        
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>                                                      
                                    </div>                                    
                                    <!--Contact Info Local Rep-->

                                    <!-- Home address Local Rep -->
                                    <div class="row border mt-2">
                                        <div class="row p-2 ml-2 bg-success">
                                            <h6>Adresse Domicile</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col ">
                                                <table class="table table-hover table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Rue/Avenue</th>
                                                            <td><?php echo $_SESSION['RueUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">N° Appart/Résidence</th>
                                                            <td><?php echo $_SESSION['NumResidenceUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Quartier/Arrondissement</th>
                                                            <td><?php echo $_SESSION['QuartierUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Commune/Territoire/Village</th>
                                                            <td><?php echo $_SESSION['CommuneUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ville</th>
                                                            <td><?php echo $_SESSION['VilleUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Province/Etat</th>
                                                            <td><?php echo $_SESSION['ProvinceUser']; ?></td>                                                        
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pays</th>
                                                            <td><?php echo $_SESSION['PaysResidence']; ?></td>                                                        
                                                        </tr>                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                                      
                                    </div>                                    
                                    <!--Contact Info local rep-->
                                    
                                </div>
                                <!--Contact Info data-->
                            </div>
                        </div>
                        <!--Contact Info tab pane-->

                        <!--Offers tab pane-->
                        <div class="tab-pane" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                              
                            <!--Posted offers-->
                            <div class="row g-2 mt-2">                               
                                <div class="col p-2 border ">
                                    
                                    <div class="row m-2">
                                        <div class="col col-sm-5">
                                            <h5 class="text-danger">Appels d'offres publiés</h5>
                                        </div>
                                        <!--Search textbox-->
                                        <div class="col-3 justify-content-end p-2 m-2">
                                            <input class="form-control" id="searchOffer1" type="text" placeholder="Rechercher...">
                                        </div>
                                        <!--Search textbox-->

                                        <!--Status select filter-->
                                        <div class="col-3 col-sm-3 justify-content-end p-2 m-2"> 
                                            <div class="row">
                                                <span class="p-2">Statut: </span>  
                                                <select class="form-select" id="selectStatus1" aria-label=".form-select-sm example">
                                                    <option selected></option></option>
                                                    <option value="Ouvert">Ouvert</option>
                                                    <option value="Fermé">Fermé</option>                                                
                                                </select>
                                                                                           
                                            </div>  
                                        </div>
                                        <!--Status filter-->                                     
                                    </div>

                                    <!--Offers table-->
                                    <div class="row m-2">
                                        <div class="col ">
                                            <div class="table-wrapper" >
                                                <table class="table table-responsive table-bordered table-striped" >
                                                    <thead>
                                                        <tr>
                                                            <th>Organisation</th>
                                                            <th>Description</th>
                                                            <th>Catégorie</th>
                                                            <th>Couverture géographique</th>                                                                                                
                                                            <th>Date de publication</th>
                                                            <th>Date de clôture</th>
                                                            <th>Statut</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <tr>
                                                            <td><a href="#">PADMPME</a></td>
                                                            <td>Services des prestations d’un prestataire en charge de l’organisation 
                                                                matérielle (Support) de la formation IP au profit des Femmes 
                                                                Micro-Entrepreneure</td>
                                                            <td>Education</td>
                                                            <td>Mbandaka</td>
                                                            <td>18-04-2022</td>
                                                            <td>01-05-2022</td>
                                                            <td>Ouvert</td>
                                                            <td><a href="#"><button class="btn btn-primary" type="submit">Postuler</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">PADMPME</a></td>
                                                            <td>Services des prestations d’un prestataire en charge de l’organisation 
                                                                matérielle (Support) de la formation IP au profit des Femmes 
                                                                Micro-Entrepreneure</td>
                                                            <td>Entrepreneuriat</td>
                                                            <td>Kinshasa, Matadi, Bukavu</td>
                                                            <td>24-04-2022</td>
                                                            <td>23-05-2022</td>
                                                            <td>Ouvert</td>
                                                            <td><a href="#"><button class="btn btn-primary" type="submit">Postuler</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">TB5</a></td>
                                                            <td>Conception et réalisation d'un site internet pour le projet OMEGA System.</td>
                                                            <td>Informatique</td>
                                                            <td>Kinshasa</td>
                                                            <td>4-04-2022</td>
                                                            <td>30-04-2022</td>
                                                            <td>Fermé</td>
                                                            <td><a href="#"><button class="btn btn-primary" type="submit">Postuler</button></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                        
                                    </div>
                                     <!--Offers table-->
                                    

                                </div>                                
                            </div> 
                            <!--Posted offers-->

                            <!--Applications -->
                            <div class="row g-2 mt-2">                               
                                <div class="col p-2 border ">
                                    
                                    <div class="row m-2">
                                        <div class="col col-sm-5">
                                            <h5 class="text-danger">Candidatures envoyées</h5>
                                        </div>
                                        <!--Search textbox-->
                                        <div class="col-3 justify-content-end p-2 m-2">
                                            <input class="form-control" id="searchOffer2" type="text" placeholder="Rechercher...">
                                        </div>
                                        <!--Search textbox-->

                                        <!--Status select filter-->
                                        <div class="col-3 col-sm-3 justify-content-end p-2 m-2"> 
                                            <div class="row">
                                                <span class="p-2">Statut: </span>  
                                                <select class="form-select" id="selectStatus2" aria-label=".form-select-sm example">
                                                    <option selected></option></option>
                                                    <option value="en cours">En cours</option>
                                                    <option value="accepté">Acceptée</option> 
                                                    <option value="rejetée">Rejetée</option>                                                
                                                </select>
                                                                                           
                                            </div>  
                                        </div>
                                        <!--Status filter-->                                     
                                    </div>

                                    <!--Applications table-->
                                    <div class="row m-2">
                                        <div class="col ">
                                            <div class="table-wrapper" >
                                                <table class="table table-responsive table-bordered table-striped" >
                                                    <thead>
                                                        <tr>
                                                            <th>Organisation</th>
                                                            <th>Description</th>
                                                            <th>Catégorie</th>
                                                            <th>Date d'envoi</th>
                                                            <th>Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable2">
                                                        <tr>
                                                            <td><a href="#">PADMPME</a></td>
                                                            <td>Services des prestations d’un prestataire en charge de l’organisation 
                                                                matérielle (Support) de la formation IP au profit des Femmes 
                                                                Micro-Entrepreneure</td>
                                                            <td>Education</td>
                                                            <td>20-04-2022</td>
                                                            <td>Rejetée</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">PADMPME</a></td>
                                                            <td>Services des prestations d’un prestataire en charge de l’organisation 
                                                                matérielle (Support) de la formation IP au profit des Femmes 
                                                                Micro-Entrepreneure</td>
                                                            <td>Education</td>
                                                            <td>20-04-2022</td>
                                                            <td>En cours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">PADMPME</a></td>
                                                            <td>Services des prestations d’un prestataire en charge de l’organisation 
                                                                matérielle (Support) de la formation IP au profit des Femmes 
                                                                Micro-Entrepreneure</td>
                                                            <td>Informatique</td>
                                                            <td>20-04-2022</td>
                                                            <td>Acceptée</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                        
                                    </div>
                                     <!--Applications table-->
                                    

                                </div>                                
                            </div> 
                            <!--Applications-->


                        </div>

                        <!--Finance tab pane-->
                        <div class="tab-pane" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                            <div class="row">
                                    <div class="col p-4">
                                    <h3>Finances</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula non odio sagittis elementum eget laoreet eros. Vivamus nec tellus ullamcorper diam pharetra fermentum. Quisque pellentesque, nunc nec maximus commodo, ipsum ipsum pretium sapien, et tincidunt nisl neque et nunc. Vestibulum ut lacus in turpis euismod euismod ut ut erat. Pellentesque sit amet pellentesque orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut elit nisi, lobortis eget porttitor a, imperdiet a dolor. Etiam vitae nisi accumsan, ultricies justo eget, volutpat nisl. Duis condimentum nisi quis neque fringilla, at accumsan magna vulputate. Nunc ut sodales nunc. Vivamus non feugiat nibh. Morbi sagittis laoreet lacus, in pretium enim sollicitudin ac. Nulla facilisi. Duis a ipsum quis dui ullamcorper consectetur vitae vitae nunc. Sed ut aliquet neque.
                                    </p>
                                    </div>
                                </div>
                        </div>

                        <!--Contracts tab pane-->
                        <div class="tab-pane" id="contracts" role="tabpanel" aria-labelledby="contracts-tab">
                            <div class="row">
                                <div class="col p-4">
                                <h3>Contrats</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula non odio sagittis elementum eget laoreet eros. Vivamus nec tellus ullamcorper diam pharetra fermentum. Quisque pellentesque, nunc nec maximus commodo, ipsum ipsum pretium sapien, et tincidunt nisl neque et nunc. Vestibulum ut lacus in turpis euismod euismod ut ut erat. Pellentesque sit amet pellentesque orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut elit nisi, lobortis eget porttitor a, imperdiet a dolor. Etiam vitae nisi accumsan, ultricies justo eget, volutpat nisl. Duis condimentum nisi quis neque fringilla, at accumsan magna vulputate. Nunc ut sodales nunc. Vivamus non feugiat nibh. Morbi sagittis laoreet lacus, in pretium enim sollicitudin ac. Nulla facilisi. Duis a ipsum quis dui ullamcorper consectetur vitae vitae nunc. Sed ut aliquet neque.
                                </p>
                                </div>
                            </div>
                        </div>

                        <!--Messages tab pane-->
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row">
                                <div class="col p-4">
                                <h3>Messages</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula non odio sagittis elementum eget laoreet eros. Vivamus nec tellus ullamcorper diam pharetra fermentum. Quisque pellentesque, nunc nec maximus commodo, ipsum ipsum pretium sapien, et tincidunt nisl neque et nunc. Vestibulum ut lacus in turpis euismod euismod ut ut erat. Pellentesque sit amet pellentesque orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut elit nisi, lobortis eget porttitor a, imperdiet a dolor. Etiam vitae nisi accumsan, ultricies justo eget, volutpat nisl. Duis condimentum nisi quis neque fringilla, at accumsan magna vulputate. Nunc ut sodales nunc. Vivamus non feugiat nibh. Morbi sagittis laoreet lacus, in pretium enim sollicitudin ac. Nulla facilisi. Duis a ipsum quis dui ullamcorper consectetur vitae vitae nunc. Sed ut aliquet neque.
                                </p>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script src="script/Js/script.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>

        <!--Scripts related to table pagination-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


        <!--Script for filters-->
        <script>

            $(document).ready(function(){
                //Filter via the search box
                $("#searchOffer1").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                $("#searchOffer2").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable2 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });

                //Filter via the select element
                $("#selectStatus1").on("change", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                $("#selectStatus2").on("change", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable2 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                }); 

                //Table pagination                
                $('#myTable').DataTable( {
                    responsive: true,
                    "pageLength": 10
                } );
            });

            
        
        </script>
        <!--Script for filters-->

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    
<?php require 'includes/footer.php';