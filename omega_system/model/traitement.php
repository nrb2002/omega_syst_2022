<?php

    class utilisateur{
        public $nom_utilisateur; public $mdp_utilisateur;

        function get_data_user(){
            $this->nom_utilisateur=$_POST['login'];
            $this->mdp_utilisateur=$_POST['mdp'];

            $nbr=strlen($this->nom_utilisateur);

            if($nbr>3){ 
                $_SESSION['etat']='c4a42871f05bd4581f034c0fac2353ed';
                $_SESSION['nomuser']=$this->nom_utilisateur;
            }else{
                $_SESSION['msg']="Login ou mot de passe non valide";
                include_once('view/user_login.php');
            }
        }

        function get_data_admin(){
            $this->nom_utilisateur=$_POST['loginadmin'];
            $this->mdp_utilisateur=$_POST['mdpadm'];

            $nbradmin=strlen($this->nom_utilisateur);

            if($nbradmin>5){
                $_SESSION['etat']='c4a42871f05bd4581f034c0fac2353ed-admin';
                $_SESSION['nomuser']=$this->nom_utilisateur;
            }else{
                $_SESSION['msg']="Login ou mot de passe non valide";
                include_once('view/admin_login.php');
            }
        }
    }

?>