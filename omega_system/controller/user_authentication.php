<?php
$access='c4a42871f05bd4581f034c0fac2353ed';
$_SESSION['etat']="@get";
$_SESSION['iduser']="";$_SESSION['nomuser']="";$_SESSION['msg']="";
include_once('model/traitement.php');
if(isset($_POST['mdp'])){
    $utilisateur=new utilisateur(); $utilisateur->get_data_user();
}
if($_SESSION['etat']=='c4a42871f05bd4581f034c0fac2353ed'){
    include_once('view/user/user_dashboard.php');
}else{
    include_once('view/user/user_login.php');
}
?>
