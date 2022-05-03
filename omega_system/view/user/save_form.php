<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Omega System - Enregistrement Entreprise</title>

  <link rel="icon" href="../../assets/images/logo_icon.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="script/Css/style.css">
  <link rel="stylesheet" href="script/Css/B_stylepage.css">
</head>
<body>

  <!--Navigation bar-->
  <?php // include('../navbar.html') ?>

<!--PEN HEADER-->
<header class="header">
  <h2 class="header__title">Formulaire d'enregistrement d'Entreprise</h2>
  <button class="btn btn-outline-success btn-lg" onclick="clearTextBoxes()">Réinitialiser</button>
</header>

<!--PEN CONTENT     -->
<div class="content">
  <!--content inner-->
  <div class="content__inner">

    <!--Multistep form main container-->
    <div class="container overflow-hidden">
      
      <!--multisteps-form-->
      <div class="multisteps-form">

        <!--progress bar-->
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Comments">L'entreprise</button>
              <button class="multisteps-form__progress-btn " type="button" title="User Info">Représentant Légal</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Education</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Coordonnées bancaires</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Confirmation</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Soumission</button>
            </div>
          </div>
        </div>

        <!--form panels-->
        <div class="row">
          <div class="col-sm-10 m-auto">
            <form class="multisteps-form__form bg-light" method="post" action="index.php" id="form_inscription">
              
              <!--single form panel - Détails sur l'entreprise-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-light js-active" data-animation="slideHorz">
                <h3 class="multisteps-form__title">Détails sur l'entreprise</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Dénomination</label>
                      <input class="multisteps-form__input form-control" name="denom_entreprise" id="denom_entreprise" type="text" placeholder="Nom de l'entreprise en toutes lettres" required/>
                    </div>
                    <div class="col-10 col-sm-2 mt-4 mt-sm-0">
                      <label for="">Sigle</label>
                      <input class="multisteps-form__input form-control" name="sigle" id="sigle" type="text" placeholder="Sigle" required/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Création</label>
                      <input class="multisteps-form__input form-control" name="date_create" id="date_create" type="date" required/>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <label for="">Objectif</label>
                    <textarea class="multisteps-form__textarea form-control" name="objectif" id="objectif" maxlength=300 placeholder="Decrire brièvement l'objectif de l'entreprise" required></textarea>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Type (Forme juridique)</label>
                      <select class="multisteps-form__select form-control" name="forme_juridique" id="forme_juridique" required>
                        <option selected="selected" value="">Sélectionnez la forme juridique</option>
                        <option>Etablissement</option>
                        <option>SARL</option>
                        <option>SA</option>
                        <option>ASBL</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Catégorie</label>
                      <select class="multisteps-form__select form-control" name="categorie" id="categorie" required>
                        <option selected="selected" value="">Sélectionnez une catégorie</option>
                        <option>Freelance</option>
                        <option>Micro-entreprise</option>
                        <option>PME</option>
                        <option>Grande Entreprise</option>
                        <option>Mutlinationale</option>
                        <option>ONG</option>
                        <option>Fondation</option>                        
                      </select>
                    </div>
                    <div class="col-10 col-sm-3">
                      <label for="">Nombre de travailleurs</label>
                      <input class="multisteps-form__input form-control" type="number" name="nbre_travailleurs" id="nbre_travailleurs" required/>
                    </div>
                  </div>                    
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Chiffre d'affaires annuel (en USD)</label>
                      <input class="multisteps-form__input form-control" type="number" name="ca" id="ca" required/>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Capital social (en USD)</label>
                      <input class="multisteps-form__input form-control" type="number" name="cs" id="cs" required/>
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Secteur d'activités</label>
                      <select class="multisteps-form__select form-control" name="activite" id="activite" required>
                        <option selected="selected" value="">Sélectionnez un secteur...</option>
                        <option>Agro-business</option>
                        <option>Agro-industrie</option>
                        <option>Industrie légère</option>
                        <option>Mines</option>
                        <option>Commerce général</option>
                        <option>Commerce de gros</option>
                        <option>Commerce de détail</option>
                        <option>...</option>                        
                      </select>
                    </div>                    
                  </div>                    
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Numéro de téléphone (Inclure l'indicatif)</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="ex: +243-855555555" name="telephone" id="telephone" required/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email</label>
                      <input class="multisteps-form__input form-control" name="email" id="email" type="email" placeholder="ex: dummy@dummy.com" required/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-sm">
                      <label for="">Siège social</label>                      
                      <input class="multisteps-form__input form-control" name="siege" id="siege" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village" required/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" type="text" name="ville" placeholder="Ville" required/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control" name="pays" id="pays" required>
                        <option selected="selected" value="">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-sm">
                      <label for="">Adresse d'exploitation</label>                      
                      <input class="multisteps-form__input form-control" name="adressexploitation" id="adressexploitation" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village" required/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" name="villexploitation" id="villexploitation" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control" name="paysexploitation" id="paysexploitation">
                        <option selected="selected" value="">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Autorisation d'ouverture</label>
                      <select class="multisteps-form__select form-control" name="autorisation" id="autorisation" required>
                        <option selected="selected" value="">...</option>
                        <option>Oui</option>
                        <option>Non</option>
                      </select>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="autorisation_piece" id="autorisation_piece" class="btn btn-primary">                    
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Identification Nationale</label>
                      <input class="multisteps-form__input form-control" name="idnat" id="idnat" type="text" placeholder="Numéro d'Identification Nationale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="idnat_piece" id="idnat_piece" class="btn btn-primary">                       
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">RCCM.</label>
                      <input class="multisteps-form__input form-control" name="rccm" id="rccm" type="text" placeholder="Numéro d'Identification Nationale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="rccm_piece" id="rccm_piece" class="btn btn-primary">                        
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Impôt</label>
                      <input class="multisteps-form__input form-control" name="numimpot" id="numimpot" type="text" placeholder="Numéro Impôt"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="impot_piece" id="impot_piece" class="btn btn-primary">                          
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Assurance</label>
                      <input class="multisteps-form__input form-control" name="assurance" id="assurance" type="text" placeholder="Police d'Assurance"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="assurance_piece" id="assurance_piece" class="btn btn-primary">                           
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">CNSS</label>
                      <input class="multisteps-form__input form-control" name="cnss" id="cnss" type="text" placeholder="Numéro CNSS"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="cnss_piece" id="cnss_piece" class="btn btn-primary">                        
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">INPP</label>
                      <input class="multisteps-form__input form-control" name="inpp"  id="inpp" type="text" placeholder="Numéro INPP"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="inpp_piece" id="inpp_piece" class="btn btn-primary">                        
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">ONEM</label>
                      <input class="multisteps-form__input form-control" name="onem" id="onem" type="text" placeholder="Numéro ONEM"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="onem_piece" id="onem_piece" class="btn btn-primary">                        
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Agrément</label>
                      <input class="multisteps-form__input form-control" name="agrement" id="agrement" type="text" placeholder="Numéro Agrément"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="agrement_piece" id="agrement_piece" class="btn btn-primary">                         
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">F92</label>
                      <input class="multisteps-form__input form-control" name="f92" id="f92" type="text" placeholder="Numéro du F92"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="f92_piece" id="f92_piece" class="btn btn-primary">                       
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Attestation Fiscale</label>
                      <input class="multisteps-form__input form-control" name="attestation_fiscale" id="attestation_fiscale" type="text" placeholder="Numéro d'Attestation Fiscale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                      <input type="file" name="attestation_piece" id="attestation_piece" class="btn btn-primary">                         
                      </div>
                    </div>                   
                  </div>                
                  <br><hr>
                  

                  <!--Navigation buttons-->
                  <div class="button-row d-flex mt-4">
                    <button onclick="validation_phase1()" id="btn_suivant1" class="btn btn-primary ml-auto " type="button" title="Next">Suivant</button>
                  </div>
                </div>
              </div>

              <!--single form panel - Infos sur le représentant légal-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-light" data-animation="slideHorz">
                <h3 class="multisteps-form__title">Informations sur le Représentant Légal</h3><hr>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Nom</label>
                      <input class="multisteps-form__input form-control" name="nom_representant" id="nom_representant" type="text" placeholder="Votre nom de famille"/>
                    </div>
                    <div class="col-10 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Postnom</label>
                      <input class="multisteps-form__input form-control" name="postnom_representant" id="postnom_representant" type="text" placeholder="Votre deuxième prénom"/>
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Prénom</label>
                      <input class="multisteps-form__input form-control" name="prenom_representant" id="prenom_representant" type="text" placeholder="Votre premier prénom"/>
                    </div>                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Lieu de Naissance</label>
                      <input class="multisteps-form__input form-control" name="lieunaiss" id="lieunaiss" type="text" placeholder="Ville, Pays"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Naissance</label>
                      <input class="multisteps-form__input form-control" name="datenaiss" id="datenaiss" type="date" />
                    </div>                    
                    <div class="col-10 col-sm-1">
                      <label for="">Sexe</label>
                      <select class="multisteps-form__select form-control" name="sexe" id="sexe">
                        <option selected="selected">...</option>
                        <option>M</option>
                        <option>F</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-4">
                      <label for="">Etat Civil</label>
                      <select class="multisteps-form__select form-control" name="etatcivil" id="etatcivil">
                        <option selected="selected" value="">...</option>
                        <option>Célibataire</option>
                        <option>Marié(e)</option>
                        <option>Divorcé(e)</option>
                        <option>Veuf(veuve)</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm-3">
                      <label for="">Nombre d'enfants</label>
                      <input class="multisteps-form__input form-control" name="nbreenfant" id="nbreenfant" type="number"/>
                    </div>
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Pays de Nationalité</label>
                      <select class="multisteps-form__select form-control" name="nationalite" id="nationalite">
                        <option selected="selected" value="">Sélectionnez un pays...</option>
                        <option value="congolaise">Congo, RD</option>
                      </select>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Numéro de téléphone (Inclure l'indicatif)</label>
                      <input class="multisteps-form__input form-control" name="telephone_representant" id="telephone_representant" type="text" placeholder="ex: +243-855555555"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email</label>
                      <input class="multisteps-form__input form-control" name="email_representant" id="email_representant" type="email" placeholder="ex: dummy@dummy.com"/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-4 mt-sm">
                      <label for="">Adresse Domicile</label>                      
                      <input class="multisteps-form__input form-control" name="adresse_representant" id="adresse_representant" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village"/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" name="ville_representant" id="ville_representant" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control" name="pays_representant" id="pays_representant">
                        <option selected="selected" value="">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-7">
                      <label for="">Fonction (ex: PDG, Gérant, Fondateur, Consultant ...)</label>
                      <input class="multisteps-form__input form-control" name="fonction" id="fonction" type="text"/>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Années d'expérience dans le secteur</label>
                      <input class="multisteps-form__input form-control" name="experience" id="experience" type="number" value="0"/>
                    </div>                    
                  </div> 
                  <br><hr>               
                  
                  <!--Navigation button-->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <button onclick="validation_phase2()" id="btn_suivant2" class="btn btn-primary ml-auto " type="button" title="Next">Suivant</button>
                  </div>
                </div>
              </div>

              <!--single form panel - -Formation du représentant légal-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Formation scolaire, académique ou professionnelle</h3>
                <div class="multisteps-form__content">
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Formation 1</label>
                      <input class="multisteps-form__input form-control" name="formation_un" id="formation_un" type="text" placeholder="Saisissez le domaine de formation"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" name="datedebut_formation_un" id="datedebut_formation_un" type="date" />
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" name="datefin_formation_un" id="datefin_formation_un" type="date" />
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" name="etude_un" id="etude_un" type="text" placeholder="Saisissez votre orientation"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" name="institut_etude_un" id="institut_etude_un" type="text" placeholder="Saisissez l'institution de formation"/>
                    </div> 
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <input type="file" name="etude_un_piece" id="etude_un_piece" class="btn btn-primary ">                   
                      </div>
                    </div>                                                          
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                  <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Formation 1</label>
                      <input class="multisteps-form__input form-control" name="formation_deux" id="formation_deux" type="text" placeholder="Saisissez le domaine de formation"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" name="datedebut_formation_deux" id="datedebut_formation_deux" type="date" />
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" name="datefin_formation_deux" id="datefin_formation_deux" type="date" />
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" name="etude_deux" id="etude_deux" type="text" placeholder="Saisissez votre orientation"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" name="institut_etude_deux" id="institut_etude_deux" type="text" placeholder="Saisissez l'institution de formation"/>
                    </div> 
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <input type="file" name="etude_deux_piece" id="etude_deux_piece" class="btn btn-primary ">                   
                      </div>
                    </div>                                           
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                  <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Formation 1</label>
                      <input class="multisteps-form__input form-control" name="formation_trois" id="formation_trois" type="text" placeholder="Saisissez le domaine de formation"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" name="datedebut_formation_trois" id="datedebut_formation_trois" type="date" />
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" name="datefin_formation_trois" id="datefin_formation_trois" type="date" />
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" name="etude_trois" id="etude_trois" type="text" placeholder="Saisissez votre orientation"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" name="institut_etude_trois" id="institut_etude_trois" type="text" placeholder="Saisissez l'institution de formation"/>
                    </div> 
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <input type="file" name="etude_trois_piece" id="etude_trois_piece" class="btn btn-primary ">                   
                      </div>
                    </div>                                       
                  </div>
                  <br><hr>

                  <!--Navigation button-->
                  <div class="row">                    
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                    </div>
                  </div>

                </div>
              </div>  

              <!--single form panel - Coordonnées bancaires-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Coordonnées bancaires</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Nom de la Banque</label>
                      <select class="multisteps-form__select form-control" name="nom_banque" id="nom_banque">
                        <option selected="selected" value="">Sélectionnez une banque...</option>
                        <option>BCC</option>
                        <option>Equitity BCDC</option>
                        <option>RawBank</option>
                        <option>EcoBank</option>
                        <option>Standard Bank</option>
                        <option>Access Bank</option>
                        <option>City Bank</option>
                        <option>BOA</option>
                        <option>...</option>                        
                      </select>
                    </div>
                    <div class="col-10 col-sm-2">
                      <label for="">Code SWIFT</label>
                      <input class="multisteps-form__input form-control" name="codswift" id="codswift" type="text" placeholder="Code SWIFT"/>
                    </div>
                    <div class="col-10 col-sm-6">
                      <label for="">Numéro de Compte</label>
                      <input class="multisteps-form__input form-control" name="num_compte" id="numcompte" type="text" placeholder="0000-00000-0000-0000000-00"/>
                    </div>                  
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                  <button onclick="validation_phas3()" id="btn_suivant3" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                </div>
              </div>
            </div>

             <!--single form panel - Confirmation résumé -->
             <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Résumé des données</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for=""><b>Dénomination de l'entreprise</b></label>
                      <p id="denomination_confirme">ECOBANK</p>
                    </div>
                    <div class="col-10 col-sm-2">
                      <label for=""><b>Sigle</b></label>
                      <p id="sigle_confirme">Swift A1212</p>
                    </div>
                    <div class="col-10 col-sm-6">
                      <label for=""><b>Date création</b></label>
                      <p id="datecreation_confirme">35035080057007</p>
                    </div>                  
                  </div>
                  <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for=""><b>Obj</b></label>
                      <p id="denomination_confirme">ECOBANK</p>
                    </div>
                    <div class="col-10 col-sm-2">
                      <label for=""><b>Sigle</b></label>
                      <p id="sigle_confirme">Swift A1212</p>
                    </div>
                    <div class="col-10 col-sm-6">
                      <label for=""><b>Date création</b></label>
                      <p id="datecreation_confirme">35035080057007</p>
                    </div>                  
                  </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                  <button onclick="validation_phas3()" id="btn_suivant3" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                </div>
              </div>
            </div>

              <!--single form panel - Termes et conditions-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Termes et conditions</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4 border m-auto">                    
                    <div class="col-10 col-sm-6">
                      <label for="">J'ai lu et j'accepte les <a href="index.php?load=conditions" target="_blank">termes et conditions</a></label>
                    </div>
                    <div class="col-10 col-sm-1">
                      <input class="form-check-input" type="checkbox" id="check_terme" name="check_terme" value="something" unchecked required>
                    </div>
                    
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <button class="btn btn-success ml-auto" type="submit" title="Send">Soumettre</button>
                  </div>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php // include('../footer.html') ?>
<!-- footer -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>

  <script src="script/Js/script.js"></script>

  <script>
    function clearTextBoxes(){
    var elements = document.getElementsByTagName("input");
    for (var ii=0; ii < elements.length; ii++) {
      if (elements[ii].type == "text" || elements[ii].type == "email" || elements[ii].type == "number" || elements[ii].type == "date") {
        elements[ii].value = "";
      }
    }
  }
  function validation_phase1(){
    var form_inscription=document.getElementById('form_inscription');
    var denom_entreprise=document.getElementById('denom_entreprise');
    var btn_suivant1=document.getElementById('btn_suivant1'); 
    var sigle=document.getElementById('sigle');
    var date_create=document.getElementById('date_create');
    var forme_juridique=document.getElementById('forme_juridique');
    var rccm=document.getElementById('rccm');
    var idnat=document.getElementById('idnat');
    var telephone=document.getElementById('telephone');
    var email=document.getElementById('email');
    
    

    if(denom_entreprise.value=="" || telephone.value=="" || email.value=="" || sigle.value=="" || date_create.value=="" || forme_juridique.value=="" || rccm.value=="" || idnat.value=="" ){
      alert("Completez toutes les zones obligatoires s'il vous plait")
      btn_suivant1.classList.remove('js-btn-next')
    }
    if(denom_entreprise.value!="" && telephone.value!="" && email.value!="" && sigle.value!="" && date_create.value!="" && forme_juridique.value!="" && rccm.value!="" && idnat.value!="" ){
      btn_suivant1.classList.add('js-btn-next')
    }
  }

  function validation_phase2(){
    var nom_representant=document.getElementById('nom_representant');
    var prenom_representant=document.getElementById('prenom_representant');
    var telephone_representant=document.getElementById('telephone_representant'); 
    var email_representant=document.getElementById('email_representant');
    var btn_suivant2=document.getElementById('btn_suivant2');

    if(nom_representant.value=="" || prenom_representant.value=="" || telephone_representant.value=="" || email_representant.value==""){
      alert("Completez toutes les zones obligatoires du représentant légal s'il vous plait")
      btn_suivant2.classList.remove('js-btn-next')
    }
    if(nom_representant.value!="" && prenom_representant.value!="" && telephone_representant.value!="" && email_representant.value!=""){
      btn_suivant2.classList.add('js-btn-next')
    }
  }

  function validation_phas3(){
    var nom_banque=document.getElementById('nom_banque');
    var codeswift=document.getElementById('codeswift');
    var num_compte=document.getElementById('num_compte'); 

    if(nom_banque.value=="" || codeswift.value=="" || num_compte.value==""){
      alert("Completez toutes les zones obligatoires des Coordonnées bancaires s'il vous plait")
      btn_suivant3.classList.remove('js-btn-next')
    }
    if(nom_banque.value!="" && codeswift.value!="" && num_compte.value!=""){
      btn_suivant3.classList.add('js-btn-next')
    }
  }
  </script>

</body>
</html>