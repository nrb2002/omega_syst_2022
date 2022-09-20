<?php
//Ouverture de la session
session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'includes/header.php'; 
?>


<!DOCTYPE html>
    <html lang="fr-FR">
    
    <body class="home page-template-default page page-id-113 custom-background custom-background-color full-width hasbanner" itemscope itemtype="https://schema.org/WebPage">


        <div id="acc-content"><!-- for acccessibility purpose -->    
            <div id="banner_section" class="banner" style="background: url(https://omegasystem.biz/wp-content/uploads/2022/05/cropped-Congo-river-landscape-2.jpg) no-repeat;">
                <div class="banner-text">
                    <h3 class="title">Profitez des avantages incontournables qu'offre le réseau OMEGA System</h3>                
                    
                    <div class="btn-holder">
                        <a href="login" class="btn-primary btn-view-product">Se connecter</a>
                        <a href="register" class="btn-primary btn-view-pricing">S'enregistrer</a>
                    </div>
                </div>    
            </div>
        </div>

<?php 
require 'includes/footer.php';

