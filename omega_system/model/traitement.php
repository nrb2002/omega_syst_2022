<?php

    class utilisateur{

        public $denom_user; public $psw_user; public $categorie_user; 
        public $login; public $msg; public $nbr_psw; public $char_psw=0; public $char_login=0;
        public $login_user; public $user_psw; public $user_categorie;
        
      //Récupération des champs de saisie
        function get_data_user(){
            $this->login=$_POST['login'];
            $this->psw_user=$_POST['mdp'];
            $this->login_user=$_POST['login'];
            $this->user_psw=$_POST['mdp'];
            $this->nbr_psw=strlen($this->psw_user);
            //Prévalidation des champs récupérés
            $this->char_psw=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->psw_user);
            $this->char_login=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->login);

        }
        function set_data_user(){
            include_once('model/cnx.php');
            $req_user="SELECT * FROM `omega_user`,omega_entreprise WHERE omega_user.IDUser=omega_entreprise.User_ID and omega_user.CodeUser='$this->login' and omega_user.PassUser='$this->psw_user' ";
            $result=$conx->query($req_user) or die();
            $tab_user=mysqli_fetch_assoc($result);
            $nbr_user=mysqli_num_rows($result);
            if($nbr_user>0){
                $this->denom_user=$tab_user['denom'];
                $this->user_categorie=$tab_user['categorie'];
            }else{
                $this->denom_user=" ";

            }
        }

        function get_data_admin(){

            $this->login=$_POST['login_admin'];
            $this->psw_user=$_POST['admin_mdp'];
            $this->nbr_psw=strlen($this->psw_user);

            $this->char_psw=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->psw_user);
            $this->char_login=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->login);
        }
        function set_data_admin(){
            include_once('model/cnx.php');
            $req_user="SELECT * FROM `omega_user` WHERE login='$this->login' and psw='$this->psw_user' and `categorie`='ADMIN' ";
            $result=$conx->query($req_user) or die();
            $tab_user=mysqli_fetch_assoc($result);
            $nbr_user=mysqli_num_rows($result);
            if($nbr_user>0){
                $this->denom_user=$tab_user['denom'];
                $this->user_categorie=$tab_user['categorie'];
            }else{
                $this->denom_user=" ";

            }
        }
    }

?>