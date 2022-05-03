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
        $msg="Votre login comporte des caractères non autorisés";
        include_once('view/admin/admin_login.php');
    }elseif($utilisateur->nbr_psw<8 || $utilisateur->char_psw==0){
        $msg="Le Format de votre mot de passe est invalide";
        include_once('view/admin/admin_login.php');
    }else{
        $utilisateur=new utilisateur(); $utilisateur->get_data_admin(); $utilisateur->set_data_admin();
        if($utilisateur->denom_user<>" "){
            $_SESSION['etat']='c4a42871f05bd4581f034c0fac2353ed';
            $_SESSION['nomuser']=$utilisateur->denom_user;
        }else{
            $msg="Votre Login ou mot de passe incorect";
            include_once('view/admin/admin_login.php');
        }
    }
}
if(isset($_GET['access'])){
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

