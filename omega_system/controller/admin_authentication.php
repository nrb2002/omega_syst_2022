<?php

session_start();
$access='c4a42871f05bd4581f034c0fac2353ed';
$msg=" ";
$_SESSION['etat']="@cc";
include_once('model/traitement.php');
if(isset($_POST['login_admin'])){ 
    echo 'ok ca passe ici';
    $utilisateur=new utilisateur(); $utilisateur->get_data_admin();
    if($utilisateur->char_login==1){
        $msg="Votre login comporte des caractères non-autorisés";
        include_once('view/admin/admin_login.php');
      //Vérifier la validité du mot de passe: au moins 8 caractères et conternir des caractères spéciaux
    }elseif($utilisateur->nbr_psw<8 || $utilisateur->char_psw==0){
        $msg="Mot de passe invalide.";
        //Retour à la page d'accueil de connexion admin
        include_once('view/admin/admin_login.php');
    }else{
      //Vérifier si le login et le mot existent et remplissent les conditions, établir la connexion  
        $utilisateur=new utilisateur(); $utilisateur->get_data_admin(); $utilisateur->set_data_admin();      
      if($utilisateur->denom_user<>" "){
            $_SESSION['etat']='c4a42871f05bd4581f034c0fac2353ed';
            $_SESSION['nomuser']=$utilisateur->denom_user;
        }
      //Autrement, renvoyer un message d'erreur et retourner à la page de connexion. 
      else{
            $msg="Login ou mot de passe incorrect.";
            include_once('view/admin/admin_login.php');
        }
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    include_once('view/admin/admin_login.php');
}else{
    if($_SESSION['etat']=='c4a42871f05bd4581f034c0fac2353ed'){
        include_once('view/admin/admin_dashboard.php');
    }else{
        include_once('view/admin/admin_login.php');
        session_destroy();
    }
}

?>

