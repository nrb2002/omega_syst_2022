<?php

    class utilisateur{
        // déclation des variables pour utilisateur
        public $denom_user; public $psw_user; public $categorie_user; 
        public $login; public $msg; public $nbr_psw; public $char_psw=0; public $char_login=0;
        public $login_user; public $user_psw; public $user_categorie;
        
        //Récupération des données des champs de saisie
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
        // interaction avec la base de données
        function set_data_user(){
            include_once('model/cnx.php'); // acces à la base de données 
            $req_user="SELECT * FROM `omega_user`,`omega_entreprise` WHERE omega_user.IDUser=omega_entreprise.User_ID and omega_user.CodeUser='$this->login_user' and omega_user.PassUser='$this->psw_user' ";
            $result=$conx->query($req_user) or mysqli_error();
            $tab_user=mysqli_fetch_assoc($result); // affectation de resultat de la requette dans une table associative
            $nbr_user=mysqli_num_rows($result); // Compteur de nombre d'éléments trouvés
            
            if($nbr_user>0){ // vérification du compteur si supérieur à zéro
            // Affectation du nom et fonction dans des variables de la class utilisateur
                $this->denom_user=$tab_user['NomUser'];
                $this->user_categorie=$tab_user['Fonction_ID'];
            }else{
            // initialisation de variable sinon
                $this->denom_user=" ";
            }
        }

        // recupération des données des champs des saisie compte administrateur
        function get_data_admin(){

            $this->login=$_POST['login_admin'];
            $this->psw_user=$_POST['admin_mdp'];
            $this->nbr_psw=strlen($this->psw_user);

            $this->char_psw=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->psw_user);
            $this->char_login=preg_match('/[~`!@#$%^&*()-+=\[\]{}\|\\:;\"\'<,>.]/', $this->login);
        }
        // interaction avec la base des données pour compte administrateur
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
    class inscription{
        // Déclaration des variables
        public $denom_entreprise;           public $sigle;                      public $date_create;
        public $objectif;                   public $forme_juridique;            public $categorie;
        public $nbre_travailleurs;          public $chifreaffaire;              public $capitalsocial;
        public $activite;                   public $telephone;                  public $email;
        public $siege;                      public $ville;                      public $pays;
        public $adressexploitation;         public $villexploitation;           public $paysexploitation;
        public $autorisation;               public $autorisation_piece;         public $autorisation_piece_name;  
        public $idnat;                      public $idnat_piece;                public $idnat_piece_name; 
        public $rccm;                       public $rccm_piece;                 public $rccm_piece_name;
        public $numimpot;                   public $impot_piece;                public $impot_piece_name;
        public $assurance;                  public $assurance_piece;            public $assurance_piece_name;            
        public $cnss;                       public $cnss_piece;                 public $cnss_piece_name;
        public $inpp;                       public $inpp_piece;                 public $inpp_piece_name;                 
        public $onem;                       public $onem_piece;                 public $onem_piece_name;                 
        public $agrement;                   public $agrement_piece;             public $agrement_piece_name;
        public $f92;                        public $f92_piece;                  public $f92_piece_name;                  
        public $attestation_fiscale;        public $attestation_piece;          public $attestation_piece_name;          
        public $nom_representant;           public $postnom_representant;       public $prenom_representant;        
        public $lieunaiss;                  public $datenaiss;                  public $sexe;                       
        public $etatcivil;                  public $nbreenfant;                 public $nationalite;                
        public $telephone_representant;     public $email_representant;         public $adresse_representant;       
        public $ville_representant;         public $pays_representant;          public $fonction;                   
        public $experience;                 public $formation_un;               public $datedebut_formation_un;     
        public $datefin_formation_un;       public $etude_un;                   public $institut_etude_un;          
        public $etude_un_piece;             public $etude_un_piece_name;        public $formation_deux;
        public $datedebut_formation_deux;   public $datefin_formation_deux;     public $etude_deux;
        public $institut_etude_deux;        public $etude_deux_piece;           public $etude_deux_piece_name; 
        public $formation_trois;            public $datedebut_formation_trois;  public $datefin_formation_trois;    
        public $etude_trois;                public $institut_etude_trois;       public $etude_trois_piece;          
        public $etude_trois_piece_name;     public $nom_banque;                 public $codswift;                   
        public $num_compte;                 public $check_terme;                public $idomega_user;               
        public $codentreprise;

        function get_data_inscription_entreprise(){
            $this->denom_entreprise         = strtoupper($_POST['denom_entreprise']);
            $this->sigle                    = strtoupper($_POST['sigle']);
            $this->date_create              = $_POST['date_create'];
            $this->objectif                 = strtoupper($_POST['objectif']);
            $this->forme_juridique          = strtoupper($_POST['forme_juridique']);
            $this->categorie                = strtoupper($_POST['categorie']);
            $this->nbre_travailleurs        = $_POST['nbre_travailleurs'];
            $this->chifreaffaire            = $_POST['chifreaffaire'];
            $this->capitalsocial            = $_POST['capitalsocial'];
            $this->activite                 = strtoupper($_POST['activite']);
            $this->telephone                = $_POST['telephone'];
            $this->email                    = strtolower($_POST['email']);
            $this->siege                    = strtoupper($_POST['siege']);
            $this->ville                    = strtoupper($_POST['ville']);
            $this->pays                     = strtoupper($_POST['pays']);
            $this->adressexploitation       = strtoupper($_POST['adressexploitation']);
            $this->villexploitation         = strtoupper($_POST['villexploitation']);
            $this->paysexploitation         = strtoupper($_POST['paysexploitation']);
            $this->autorisation             = strtoupper($_POST['autorisation']);
            // autorisation piece jointe
            $this->autorisation_piece       = $_FILES['autorisation_piece']['tmp_name'];
            $this->autorisation_piece_name  = $_FILES['autorisation_piece']['name'];
            
            $this->idnat                    = $_POST['idnat'];
            // idnat piece jointe
            $this->idnat_piece              = $_FILES['idnat_piece']['tmp_name'];
            $this->idnat_piece_name         = $_FILES['idnat_piece']['name'];
            $this->rccm                     = $_POST['rccm'];
            // rccm piece jointe
            $this->rccm_piece               = $_FILES['rccm_piece']['tmp_name'];
            $this->rccm_piece_name          = $_FILES['rccm_piece']['name'];
            $this->numimpot                 = $_POST['numimpot'];
             // impot piece jointe
            $this->impot_piece              = $_FILES['impot_piece']['tmp_name'];
            $this->impot_piece_name         = $_FILES['impot_piece']['name'];
            $this->assurance                = $_POST['assurance'];
             // assurance piece jointe
            $this->assurance_piece          = $_FILES['assurance_piece']['tmp_name'];
            $this->assurance_piece_name     = $_FILES['assurance_piece']['name'];
            $this->cnss                     = $_POST['cnss'];
            // cnss piece jointe
            $this->cnss_piece               = $_FILES['cnss_piece']['tmp_name'];
            $this->cnss_piece_name          = $_FILES['cnss_piece']['name'];
            $this->inpp                     = $_POST['inpp'];
            // fichier piece jointe
            $this->inpp_piece               = $_FILES['inpp_piece']['tmp_name'];
            $this->inpp_piece_name          = $_FILES['inpp_piece']['name'];
            $this->onem                     = $_POST['onem'];
            // onem piece jointe
            $this->onem_piece               = $_FILES['onem_piece']['tmp_name'];
            $this->onem_piece_name          = $_FILES['onem_piece']['name'];
            $this->agrement                 = $_POST['agrement'];
            // agrement piece jointe
            $this->agrement_piece           = $_FILES['agrement_piece']['tmp_name'];
            $this->agrement_piece_name      = $_FILES['agrement_piece']['name'];
            $this->f92                      = $_POST['f92'];
            // f92 piece jointe
            $this->f92_piece                = $_FILES['f92_piece']['tmp_name'];
            $this->f92_piece_name           = $_FILES['f92_piece']['name'];
            $this->attestation_fiscale      = $_POST['attestation_fiscale'];
            // Attestation pièce
            $this->attestation_piece        = $_FILES['attestation_piece']['tmp_name'];
            $this->attestation_piece_name   = $_FILES['attestation_piece']['name'];

            $this->nom_representant         = strtoupper($_POST['nom_representant']);
            $this->postnom_representant     = strtoupper($_POST['postnom_representant']);
            $this->prenom_representant      = strtoupper($_POST['prenom_representant']);
            $this->lieunaiss                = strtoupper($_POST['lieunaiss']);
            $this->datenaiss                = $_POST['datenaiss'];
            $this->sexe                     = strtoupper($_POST['sexe']);
            $this->etatcivil                = strtoupper($_POST['etatcivil']);
            $this->nbreenfant               = $_POST['nbreenfant'];
            $this->nationalite              = strtoupper($_POST['nationalite']);
            $this->telephone_representant   = $_POST['telephone_representant'];
            $this->email_representant       = strtolower($_POST['email_representant']);
            $this->adresse_representant     = strtoupper($_POST['adresse_representant']);
            $this->ville_representant       = strtoupper($_POST['ville_representant']);
            $this->pays_representant        = strtoupper($_POST['denom_entreprise']);
            $this->fonction                 = strtoupper($_POST['fonction']);
            $this->experience               = $_POST['experience'];
            $this->formation_un             = strtoupper($_POST['formation_un']);
            $this->datedebut_formation_un   = $_POST['datedebut_formation_un'];
            $this->datefin_formation_un     = $_POST['datefin_formation_un'];
            $this->etude_un                 = strtoupper($_POST['etude_un']);
            $this->institut_etude_un        = strtoupper($_POST['institut_etude_un']);
            // etude un piece jointe
            $this->etude_un_piece           = $_FILES['etude_un_piece']['tmp_name'];
            $this->etude_un_piece_name      = $_FILES['etude_un_piece']['name'];
            $this->formation_deux           = strtoupper($_POST['formation_deux']);
            $this->datedebut_formation_deux = $_POST['datedebut_formation_deux'];
            $this->datefin_formation_deux   = $_POST['datefin_formation_deux'];
            $this->etude_deux               = strtoupper($_POST['etude_deux']);
            $this->institut_etude_deux      = strtoupper($_POST['institut_etude_deux']);
            // etude deux pièce jointe
            $this->etude_deux_piece           = $_FILES['etude_deux_piece']['tmp_name'];
            $this->etude_deux_piece_name      = $_FILES['etude_deux_piece']['name'];
            $this->formation_trois          = strtoupper($_POST['formation_trois']);
            $this->datedebut_formation_trois= $_POST['datedebut_formation_trois'];
            $this->datefin_formation_trois  = $_POST['datefin_formation_trois'];
            $this->etude_trois              = $_POST['etude_trois'];
            $this->institut_etude_trois     = strtoupper($_POST['institut_etude_trois']);
            // etude trois pièce jointe
            $this->etude_trois_piece           = $_FILES['etude_trois_piece']['tmp_name'];
            $this->etude_trois_piece_name      = $_FILES['etude_trois_piece']['name'];
            $this->nom_banque               = strtoupper($_POST['nom_banque']);
            $this->codswift                 = $_POST['codswift'];
            $this->num_compte               = $_POST['num_compte'];
            $this->check_terme              = $_POST['check_terme'];

        }
        function save_data_inscription(){
            mkdir("arch/$this->codentreprise");
            move_uploaded_file($this->profil, "data/profile/$this->codentreprise/$this->autorisation_piece");
        }
        
    }

?>