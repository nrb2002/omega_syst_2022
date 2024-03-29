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
<html lang="fr">

<head>
    <title>Compte administrateur </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $_SESSION['nomuser']; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>Profil</a>
                                            <a href="#!"><i class="ti-settings"></i>Parametre</a>

                                            <a href="index_admin.php?logout=0"><i class="ti-layout-sidebar-left"></i>Se déconnecter</a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Touver un membre</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a onclick="Go_tableaudebord()" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Tableau de bord</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Soumission</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="activ">
                                    <a onclick="Go_entreprise()"  class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Entreprises</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="activ">
                                    <a onclick="Go_consultant()"  class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Consultants</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Projets</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Rapports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Premiere catégorie</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Deuxième catégorie</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Troisième Catégorie</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Edition</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Edition Projets</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

<!-- Début Bloc tableau de bord -->

        <div class="pcoded-content" id="tableaudebord" style="display:block">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tableau de bord</h5>
                                <p class="m-b-0">Bienvenue sur Omega System</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Tableau de bord</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <!-- Material statustic card start -->
                                <div class="col-xl-4 col-md-12">
                                    <div class="card mat-stat-card">
                                        <div class="card-block">
                                            <div class="row align-items-center b-b-default">
                                                <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                        <!-- <i class="fas fa-volume-down text-c-green f-24"></i> -->
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            <!-- <i class="far fa-file-alt text-c-red f-24"></i>-->
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                        <!--  <i class="far fa-envelope-open text-c-blue f-24"></i>-->
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card mat-stat-card">
                                        <div class="card-block">
                                            <div class="row align-items-center b-b-default">
                                                <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            <i class="fas fa-share-alt text-c-purple f-24"></i>
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            <i class="fas fa-sitemap text-c-green f-24"></i>
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            <i class="fas fa-signal text-c-red f-24"></i>
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-4 p-r-0">
                                                            <i class="fas fa-wifi text-c-blue f-24"></i>
                                                        </div>
                                                        <div class="col-8 p-l-0">
                                                            <h5></h5>
                                                            <p class="text-muted m-b-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card mat-clr-stat-card text-white green ">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-3 text-center bg-c-green">
                                                    <i class="fas fa-star mat-icon f-24"></i>
                                                </div>
                                                <div class="col-9 cst-cont">
                                                    <h5>20</h5>
                                                    <p class="m-b-0">Projets au total</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mat-clr-stat-card text-white blue">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-3 text-center bg-c-blue">
                                                    <i class="fas fa-trophy mat-icon f-24"></i>
                                                </div>
                                                <div class="col-9 cst-cont">
                                                    <h5>17</h5>
                                                    <p class="m-b-0">Projets en cours</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Material statustic card end -->
                                <!-- order-visitor start -->


                                <!-- order-visitor end -->

                                <!--  sale analytics start -->
                                <div class="col-xl-6 col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header">
                                            <h5>Projets récents (en appel d'offre ou en cours d'exécutions)</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0 without-header">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Réhabilitation de la Route Baïpasa</h6>
                                                                        <p class="text-muted m-b-0">Projet de l'Etat Congolais , Rdc</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <h6 class="f-w-700">estimé à <br> $80.000.000<i class="fas fa-level-down-alt text-c-red m-l-10"></i></h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Devélopement de térritoire de DJUGU</h6>
                                                                        <p class="text-muted m-b-0">Projet de l'Etat Congolais , Rdc</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <h6 class="f-w-700">estimé à <br> $10.000.000<i class="fas fa-level-down-alt text-c-red m-l-10"></i></h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Réhabilitation de la Route MOKALI</h6>
                                                                        <p class="text-muted m-b-0">Projet de la ville de Kinshasa , Rdc</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <h6 class="f-w-700">estimé à <br> $2.000.000<i class="fas fa-level-down-alt text-c-red m-l-10"></i></h6>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-inline-block align-middle">
                                                                    <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Construction d'un stade moderne à Kenge</h6>
                                                                        <p class="text-muted m-b-0">Projet de la LINAFOOT , Rdc</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">
                                                                <h6 class="f-w-700">estimé à <br> $35.000.000<i class="fas fa-level-down-alt text-c-red m-l-10"></i></h6>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <div class="row">
                                        <!-- sale card start -->

                                        <div class="col-md-6">
                                            <div class="card text-center order-visitor-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-0">Total Projets en Faible évolution</h6>
                                                    <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>6</h4>
                                                    <p class="m-b-0">Moyenne du niveau de réalisation en 48%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card text-center order-visitor-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-0">Total Projets en Excellente évolution</h6>
                                                    <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>17</h4>
                                                    <p class="m-b-0">Moyenne du niveau de réalisation 80%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card bg-c-red total-card">
                                                <div class="card-block">
                                                    <div class="text-left">
                                                        <h4>ID Projet: 489</h4>
                                                        <p class="m-0">Etat d'avancement du projet le plus faible</p>
                                                    </div>
                                                    <span class="label bg-c-red value-badges">15%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card bg-c-green total-card">
                                                <div class="card-block">
                                                    <div class="text-left">
                                                        <h4>ID Projet: 489</h4>
                                                        <p class="m-0">Etat du projet le plus avancé</p>
                                                    </div>
                                                    <span class="label bg-c-green value-badges">91%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card text-center order-visitor-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-0">Total souscription en attente</h6>
                                                    <h4 class="m-t-15 m-b-15"></i>3</h4>
                                                    <p class="m-b-0">Depuis il y a 2 Jours</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card text-center order-visitor-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-0">Total Membres Effectifs</h6>
                                                    <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>74</h4>
                                                    <p class="m-b-0">Depuis il y a 25 ans</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sale card end -->
                                    </div>
                                </div>

                                <!--  sale analytics end -->

                                <!-- Project statustic start -->
                                <div class="col-xl-12">
                                    <div class="card proj-progress-card">
                                        <div class="card-block">
                                            <H5>Statistique du dernier projet en cours</H5><br>
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6">
                                                    <h6>Progression Globale</h6>
                                                    <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+25%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <h6>Taches en attentes</h6>
                                                    <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">75%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-c-blue" style="width:75%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <h6>Taches finis avec succès</h6>
                                                    <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+9%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-c-green" style="width:9%"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <h6>Taches en cours</h6>
                                                    <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">16%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-c-yellow" style="width:16%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Project statustic end -->
                            </div>
                        </div>
                        <!-- Page-body end -->
                    </div>
                    <div id="styleSelector"> </div>
                </div>
            </div>
        </div>

<!-- Fin bloc tableau de bord -->

<!-- Début bloc registre entreprises -->

        <div class="pcoded-content" id="blocentreprise" style="display:none">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">AGREMENT NUMERIQUE D'ENTREPRISES</h5>
                                <p class="m-b-0">Control et validation des profils des dossiers soumis</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Soumission</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Entreprise</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <!-- Basic table card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>ENTREPRISES</h5>
                                    <span>Registre des dossiers soumis</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th colspan="7">Coordonnées</th>
                                                    <th colspan="9">Authentification des pièces</th>
                                                </tr>
                                                <tr>
                                                    <th>#</th><th>Sigle</th><th>Dénomination</th>
                                                    <th>Nom Responsable</th><th>N° de compte</th>
                                                    <th>Banque</th><th>Vide</th><th>RCCM</th>
                                                    <th>Id-Nat</th> <th>Impôt</th><th>F92</th>
                                                    <th>CNSS</th><th>ATFU</th><th>INPP</th><th>Décision</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="checkbox" name="rccm" id="rccm"></td>
                                                    <td><input type="checkbox" name="idnat" id="idnat"></td>
                                                    <td><input type="checkbox" name="impot" id="impot"></td>
                                                    <td><input type="checkbox" name="f92" id="f92"></td>
                                                    <td><input type="checkbox" name="cnss" id="cnss"></td>
                                                    <td><input type="checkbox" name="atfu" id="atfu"></td>
                                                    <td><input type="checkbox" name="inpp" id="inpp"></td>
                                                    <td><a href="">Approuver</a></td>
                                                    <td><a href="">Désapprouver</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="checkbox" name="rccm" id="rccm"></td>
                                                    <td><input type="checkbox" name="idnat" id="idnat"></td>
                                                    <td><input type="checkbox" name="impot" id="impot"></td>
                                                    <td><input type="checkbox" name="f92" id="f92"></td>
                                                    <td><input type="checkbox" name="cnss" id="cnss"></td>
                                                    <td><input type="checkbox" name="atfu" id="atfu"></td>
                                                    <td><input type="checkbox" name="inpp" id="inpp"></td>
                                                    <td><a href="">Approuver</a></td>
                                                    <td><a href="">Désapprouver</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="checkbox" name="rccm" id="rccm"></td>
                                                    <td><input type="checkbox" name="idnat" id="idnat"></td>
                                                    <td><input type="checkbox" name="impot" id="impot"></td>
                                                    <td><input type="checkbox" name="f92" id="f92"></td>
                                                    <td><input type="checkbox" name="cnss" id="cnss"></td>
                                                    <td><input type="checkbox" name="atfu" id="atfu"></td>
                                                    <td><input type="checkbox" name="inpp" id="inpp"></td>
                                                    <td><a href="">Approuver</a></td>
                                                    <td><a href="">Désapprouver</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
                <!-- Main-body end -->

                <div id="styleSelector">

                </div>
            </div>
        </div>

<!-- Fin registre entreprises -->

<!-- Début bloc registre Consultat -->

<div class="pcoded-content" id="blocconsultat" style="display:none">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">AGREMENT NUMERIQUE CONSULTATS</h5>
                        <p class="m-b-0">Control et validation des profils des dossiers soumis</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Soumission</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Consultat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>CONSULTATS</h5>
                            <span>Registre des dossiers soumis</span>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-trash close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th colspan="8">Coordonnées</th>
                                            <th colspan="8">Authentification des pièces</th>
                                        </tr>
                                        <tr>
                                            <th>#</th><th>Prenom</th><th>Noms</th>
                                            <th>Genre</th><th>Age</th><th>Domaine</th>
                                            <th>N° de compte</th>
                                            <th>Banque</th><th>BAC</th><th>BAC+3</th>
                                            <th>BAC+5</th><th>DEA</th><th>FORMATIONS</th>
                                            <th>EXPERIENCE</th><th>Décision</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" name="bac" id="bac"></td>
                                            <td><input type="checkbox" name="bac3" id="bac3"></td>
                                            <td><input type="checkbox" name="bac5" id="bac5"></td>
                                            <td><input type="checkbox" name="dea" id="dea"></td>
                                            <td><input type="checkbox" name="formation" id="formation"></td>
                                            <td><input type="checkbox" name="experience" id="experience"></td>
                                            <td><a href="">Approuver</a></td>
                                            <td><a href="">Désapprouver</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" name="bac" id="bac"></td>
                                            <td><input type="checkbox" name="bac3" id="bac3"></td>
                                            <td><input type="checkbox" name="bac5" id="bac5"></td>
                                            <td><input type="checkbox" name="dea" id="dea"></td>
                                            <td><input type="checkbox" name="formation" id="formation"></td>
                                            <td><input type="checkbox" name="experience" id="experience"></td>
                                            <td><a href="">Approuver</a></td>
                                            <td><a href="">Désapprouver</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" name="bac" id="bac"></td>
                                            <td><input type="checkbox" name="bac3" id="bac3"></td>
                                            <td><input type="checkbox" name="bac5" id="bac5"></td>
                                            <td><input type="checkbox" name="dea" id="dea"></td>
                                            <td><input type="checkbox" name="formation" id="formation"></td>
                                            <td><input type="checkbox" name="experience" id="experience"></td>
                                            <td><a href="">Approuver</a></td>
                                            <td><a href="">Désapprouver</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
</div>

<!-- Fin registre Consultat -->

</div>
</div>
</div>
</div>
<script src="Scripts/Js/B_scriptaccesspage.js"></script>
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- slimscroll js -->
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical/vertical-layout.min.js "></script>

<script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>