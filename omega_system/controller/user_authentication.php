<?php

session_start();
$access='c4a42871f05bd4581f034c0fac2353ed';
$msg="";
$_SESSION['etat']="@cc";
include_once('model/traitement.php');

if(isset($_POST['mdp'])){
    $utilisateur=new utilisateur(); $utilisateur->get_data_user();
    if($utilisateur->char_login==1){
        $msg="Votre login comporte des caractères non autorisés";
        include_once('view/user/user_login.php');
    }elseif($utilisateur->nbr_psw<8 || $utilisateur->char_psw==0){
        $msg="Mot de passe invalide.";
        include_once('view/user/user_login.php');
    }else{
        $utilisateur=new utilisateur(); $utilisateur->get_data_user(); $utilisateur->set_data_user();
        if($utilisateur->denom_user<>" "){
            $_SESSION['etat']='c4a42871f05bd4581f034c0fac2353ed';
            $_SESSION['nomuser']=$utilisateur->denom_user;
        }else{
            $msg="Login ou mot de passe incorrect";
            include_once('view/user/user_login.php');
        }
    }
}
if(isset($_GET['access'])){
    session_destroy();
    include_once('view/user/user_login.php');
}elseif(isset($_GET['load'])){
    $page=$_GET['load'];
    include_once('view/user/'.$page.'.php');
}else{
    if($_SESSION['etat']=='c4a42871f05bd4581f034c0fac2353ed'){
        if($utilisateur->user_categorie=="ENTREPRISE"){
            include_once('view/user/user_dashboard.php');
        }else{
            include_once('view/user/user_dashboard2.php');
        }
        
    }else{
        include_once('view/user/user_login.php');
        session_destroy();
    }
}

?>
