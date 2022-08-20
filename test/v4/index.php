<?php
//Ouverture de la session
session_start(); //Ouverture de la session

//Importer l'entête du site
ob_start(); //Prévient des erreurs de redirection; doit être utilisé avec ob_end_flush() juste après toute redirection
require 'header.php'; 
?>


<!DOCTYPE html>
    <html lang="fr-FR">
    
<body class="home page-template-default page page-id-113 custom-background custom-background-color full-width hasbanner" itemscope itemtype="https://schema.org/WebPage">


    <div id="acc-content"><!-- for acccessibility purpose -->    <div id="banner_section" class="banner" style="background: url(https://omegasystem.biz/wp-content/uploads/2022/05/cropped-Congo-river-landscape-2.jpg) no-repeat;">
        <div class="banner-text">
            <h2 class="title">Profitez des avantages incontournables qu'offre OMEGA System</h2>
            
            <div class="banner-content">Un accompagnement personnalisé dans le business environnemental</div>
            
            <div class="btn-holder">
                <a href="#" class="btn-primary btn-view-product">Voir tous nos appels d&#039;offres</a>
                <a href="connexion.php" class="btn-primary btn-view-pricing">Connectez-vous</a>
            </div>
        </div>    
    </div>

<?php 
require 'footer.php';

?>