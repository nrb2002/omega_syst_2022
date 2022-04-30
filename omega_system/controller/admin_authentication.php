<?php
$_SESSION['etat']="@get";
$_SESSION['iduser']="";$_SESSION['nomuser']="";$_SESSION['msg']="";
include_once('model/traitement.php');

if(isset($_POST['loginadmin'])){
    $utilisateur=new utilisateur(); $utilisateur->get_data_admin();
}

if($_SESSION['etat']=='c4a42871f05bd4581f034c0fac2353ed-admin'){
    include_once('view/admin/admin_dashboard.php');
}else{
    include_once('view/admin/admin_login.php');
}
?>

