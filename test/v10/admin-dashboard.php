<?php

//Ouverture de la session
session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require '../includes/header.php'; 

//Importer la vérification de session active avant de donner accès à la page
require '../includes/session-auth.php';

//Connexion à la BDD avec PHP
//La variable de connexion comprend le nom ou adresse du serveur, le nom de la base de donnée, le nom d'utilisateur de l'admin et son mot de passe
require '../includes/db.php';

?>

<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tableau de bord - Admin</title>

        <!-- Favicon icon -->
        <link rel="icon" href="../../assets/images/logo_icon.png" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="script/Css/style.css">
        <link rel="stylesheet" href="script/Css/B_stylepage.css">   
         
    </head>

    <body>
        <!-- Welcome Nav -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light border shadow">
            <div class="container-fluid">
                <span class="navbar-text text-center"><i><?php echo 'Bienvenue, '.$_SESSION['Prenom']; ?></i></span>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Paramètres</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?access=0">Se déconnecter</a>
                    </li>                
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
                        <a class="nav-link" id="aao-tab" data-toggle="tab" href="#aao" role="tab" aria-controls="aao" aria-selected="false">AAO</a>
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
                                        <div class="col-sm-6 bg-light p-2 m-auto">
                                            <img src="data/img/design/logo TB5.jpg" alt="Logo" width="250px">
                                        </div>                                                      
                                    </div>
                                    <div class="row justify-content-center">
                                        <button class="btn btn-primary m-2 " type="submit" >Modifier</button>
                                    </div>
                                    <hr>
                                    <!--Basic Info-->
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
                                                        <th scope="row">NOM Complet </th>
                                                        <td>Trust Business 5</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro RCCM</th>
                                                        <td>RCCM000000</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro d'Identification Nationale</th>
                                                        <td>Congo Empire</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro Impôt</th>
                                                        <td>00000000</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Numéro CNSS</th>
                                                        <td>00000000</td>                                                        
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
                                    <div class="row mt-2 border bg-light p-2">                                        
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
                                                    <th scope="row">Chiffre d'affaires annuaire en USD</th>
                                                    <td>1.000.000,00</td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Capital Social en USD</th>
                                                    <td>1.000.000,00</td>                                                        
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
                                    <div class="row mt-2 border bg-light p-2">
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
                                                    <th scope="row">Effectif total du personnel</th>
                                                    <td>50</td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Salariés</th>
                                                    <td>5</td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Temporaires</th>
                                                    <td>15</td>                                                        
                                                </tr>
                                                <tr>
                                                    <th scope="row">Journaliers</th>
                                                    <td>30</td>                                                        
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
                            <div class="row">
                                    <div class="col p-4">
                                    <h3>Coordonnées</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula non odio sagittis elementum eget laoreet eros. Vivamus nec tellus ullamcorper diam pharetra fermentum. Quisque pellentesque, nunc nec maximus commodo, ipsum ipsum pretium sapien, et tincidunt nisl neque et nunc. Vestibulum ut lacus in turpis euismod euismod ut ut erat. Pellentesque sit amet pellentesque orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut elit nisi, lobortis eget porttitor a, imperdiet a dolor. Etiam vitae nisi accumsan, ultricies justo eget, volutpat nisl. Duis condimentum nisi quis neque fringilla, at accumsan magna vulputate. Nunc ut sodales nunc. Vivamus non feugiat nibh. Morbi sagittis laoreet lacus, in pretium enim sollicitudin ac. Nulla facilisi. Duis a ipsum quis dui ullamcorper consectetur vitae vitae nunc. Sed ut aliquet neque.
                                    </p>
                                    </div>
                                </div>
                        </div>

                        <!--AAO tab pane-->
                        <div class="tab-pane" id="aao" role="tabpanel" aria-labelledby="aao-tab">
                            <div class="row">
                                    <div class="col p-4">
                                    <h3>AAO</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula non odio sagittis elementum eget laoreet eros. Vivamus nec tellus ullamcorper diam pharetra fermentum. Quisque pellentesque, nunc nec maximus commodo, ipsum ipsum pretium sapien, et tincidunt nisl neque et nunc. Vestibulum ut lacus in turpis euismod euismod ut ut erat. Pellentesque sit amet pellentesque orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut elit nisi, lobortis eget porttitor a, imperdiet a dolor. Etiam vitae nisi accumsan, ultricies justo eget, volutpat nisl. Duis condimentum nisi quis neque fringilla, at accumsan magna vulputate. Nunc ut sodales nunc. Vivamus non feugiat nibh. Morbi sagittis laoreet lacus, in pretium enim sollicitudin ac. Nulla facilisi. Duis a ipsum quis dui ullamcorper consectetur vitae vitae nunc. Sed ut aliquet neque.
                                    </p>
                                    </div>
                                </div>
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



        



        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
    
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        <script src="script/Js/script.js"></script>


    </body>
</html>