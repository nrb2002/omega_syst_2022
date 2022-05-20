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

  <link rel="stylesheet" href="script/Css/style.css">
  <link rel="stylesheet" href="script/Css/B_stylepage.css">

</head>
<body>

  

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
              <button class="multisteps-form__progress-btn js-active" type="button" title="Business info">L'entreprise</button>
              <button class="multisteps-form__progress-btn " type="button" title="Legal Rep">Représentant Légal</button>
              <button class="multisteps-form__progress-btn" type="button" title="Education">Education</button>
              <button class="multisteps-form__progress-btn" type="button" title="Bank info">Coordonnées bancaires</button>
              <button class="multisteps-form__progress-btn" type="button" title="Attachments">Pièces jointes</button>
              <button class="multisteps-form__progress-btn" type="button" title="Submit">Soumission</button>
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
                  <div class="form-row mt-4 text-left">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Dénomination <strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" name="denom_entreprise" id="denom_entreprise" type="text" placeholder="Nom de l'entreprise en toutes lettres" required/>
                    </div>
                    <div class="col-10 col-sm-2 mt-4 mt-sm-0">
                      <label for="">Sigle</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Sigle"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Création<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" name="date_create" id="date_create" type="date" required/>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <label for="">Objectif</label>
                    <textarea class="multisteps-form__textarea form-control" name="objectif" id="objectif" maxlength=300 placeholder="Decrire brièvement l'objectif de l'entreprise"></textarea>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Forme juridique<strong class="text-danger">*</strong></label>
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
                      <select class="multisteps-form__select form-control" name="categorie" id="categorie">
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
                      <input class="multisteps-form__input form-control" type="number" name="nbre_travailleurs" id="nbre_travailleurs" />
                    </div>
                  </div>                    
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Chiffre d'affaires annuel (en USD)<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" type="number" name="ca" id="ca" required/>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Capital social (en USD)<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" type="number" name="capitalsocial" id="capitalsocial" required/>
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Secteur d'activités</label>
                      <select class="multisteps-form__select form-control" name="activite" id="activite" >
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
                      <label for="">Numéro de téléphone (Inclure l'indicatif)<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="ex: +243-855555555" name="telephone" id="telephone" required/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" name="email" id="email" type="email" placeholder="ex: dummy@dummy.com" required/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-sm">
                      <label for="">Siège social<strong class="text-danger">*</strong></label>                      
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
                      <label for="">Adresse d'exploitation<strong class="text-danger">*</strong></label>                      
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
                      <label for="">Nom<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" name="nom_representant" id="nom_representant" type="text" placeholder="Votre nom de famille" required>
                      
                    </div>
                    <div class="col-10 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Postnom</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Votre deuxième prénom"/>
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Prénom<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" name="prenom_representant" id="prenom_representant" type="text" placeholder="Votre premier prénom" required/>
                    </div>                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Lieu de Naissance</label>
                      <input class="multisteps-form__input form-control" name="lieunaiss" id="lieunaiss" type="text" placeholder="Ville, Pays"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Naissance<strong class="text-danger">*</strong></label>
                      <input class="multisteps-form__input form-control" type="date" required/>
                    </div>                    
                    <div class="col-10 col-sm-1">
                      <label for="">Sexe<strong class="text-danger">*</strong></label>
                      <select class="multisteps-form__select form-control" name="sexe" id="sexe" required>
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
                      <label for="">Nationalité<strong class="text-danger">*</strong></label>
                      <select class="multisteps-form__select form-control" name="nationalite" id="nationalite" required>
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

                  <!--Education ou Formation suivie-->
                  <div class="row" >
                    <!--Une instance de Formation-->	
                    <div class="row" id="education">
                      <!--Champs de saisie pour une formation-->	
                      <div class="col col-sm ml-sm-4 border">
                        <!--Domaine de formation-->																	
                        <div class="form-row p-2">
                          <label for="">Domaine de Formation<strong class="text-danger">*</strong></label>
                          <input class="multisteps-form__input form-control" name="formation_un" id="formation_un" type="text" placeholder="Saisissez le domaine de formation" required/>
                        </div>							
                        <!--Ecole fréquentée-->
                        <div class="form-row p-2 ">
                          <label for="">Ecole/Université<strong class="text-danger">*</strong></label>
                          <input class="multisteps-form__input form-control" name="institut_etude_un" id="institut_etude_un" type="text" placeholder="Saisissez l'institution de formation" required/>
                        </div>
                        <!--Diplôme ou Certificat obtenu-->
                        <div class="form-row p-2">
                          <label for="">Certificat/Diplôme<strong class="text-danger">*</strong></label>
                          <input class="multisteps-form__input form-control" name="etude_un" id="etude_un" type="text" placeholder="Saisissez votre orientation" required/>
                        </div>
                        <!--Période de la formation & Pièce jointe-->
                        <div class="form-row text-left p-2">
                          <!--Période de la formation-->
                          <div class="col-sm-3 ">
                            <label for="">Début</label>
                            <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                          </div> 
                          <div class="col-sm-3">
                            <label for="">Fin</label>
                            <input class="multisteps-form__input form-control" name="datefin_formation_un" id="datefin_formation_un" type="date" />
                          </div>
                          <!--Pièce jointe-->	
                          <div class=" col col-sm">
                            <label for="">Pièce jointe </label>								
                            <input type="file" name="etude_un_piece" id="etude_un_piece" class="btn btn-primary " accept="image/png, image/jpeg, .pdf">                                   
                            <small><i>png, jpeg, pdf</i></small>
                          </div>                                                          
                        </div>						
                      </div>			
                      
                      <!--Boutton Supprimer-->
                      <div class="col-sm-2 pt-sm-0">
                      <button class="btn btn-outline-danger" type="button" id="DeleteRow" title="DeleteRow">Supprimer</button>
                      </div>
                    </div>
                    
                    <!--Nouvelle instance de Formation-->
                    <div id="newinput" class="mt-sm-2 mb-sm-2"></div>
                  
                  </div>                  
                  
                  <!--Boutton pour ajouter une formation-->			
                  <div class="row mt-sm-2 ml-sm-0 p-0">                    
                    <button class="btn btn-outline-secondary add_item_btn" type="button" id="rowAdder" title="rowAdder">Ajouter une formation</button>
                  </div>
                  
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
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez une banque...</option>
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
                      <input class="multisteps-form__input form-control" type="text" placeholder="Code SWIFT"/>
                    </div>
                    <div class="col-10 col-sm-6">
                      <label for="">Numéro de Compte</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="0000-00000-0000-0000000-00"/>
                    </div>                  
                </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                  </div>
                </div>
              </div>

              <!--single form panel - Attachments-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Pièces jointes</h3>
                <div class="multisteps-form__content">                  
                  <div class="form-row mt-4 text-left">
                    <div class="col-8">
                      <span for="">Autorisation d'ouverture</span>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">...</option>
                        <option>Oui</option>
                        <option>Non</option>
                      </select>
                    </div>                   
                    <div class="col">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Identification Nationale</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro d'Identification Nationale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Id. Nat.</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro d'Identification Nationale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Impôt</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro Impôt"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Assurance</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Police d'Assurance"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">CNSS</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro CNSS"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">INPP</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro INPP"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">ONEM</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro ONEM"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Agrément</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro Agrément"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">F92</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro du F92"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="">Attestation Fiscale</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Numéro d'Attestation Fiscale"/>
                    </div> 
                    <div class="col-12 col-sm-6">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                   
                  </div>  
                                    
                </div>
                <!--Navigation buttons-->
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                  <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                </div>                  
              </div>              
              
              <!--single form panel - Termes et conditions-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Termes et conditions</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-10 m-auto">
                      <ol>
                        <li>Les données recueillies restent sous la responsabilité administrative de OMEGA System qui prend en charge leur sécurisation dans les limites de ses ressources et de ses capacités.</li>
                        <br><li>OMEGA System s’engage à apporter tout le soin nécessaire à la protection des données personnelles et des entreprises soumises à travers son système.</li>
                        <br><li>Les obligations financières des utilisateurs qui découlent de l’utilisation des ressources nécessaires pour accéder à OMEGA System sont pleinement la responsabilité de l’utilisateur.</li>
                        <br><li>Toute manipulation engagée par l’utilisateur au-delà des présents termes et conditions d’utilisation sont sous la responsabilité de l’utilisateur de OMEGA System. Il appartient donc à l’utilisateur de prendre les mesures nécessaires à la sécurisation de ses appareils lors de sa connexion à OMEGA System.</li>
                        <br><li>OMEGA System n’est pas responsable des dommages causés par le mauvais état du matériel appartenant à l’utilisateur ou dus à l’inobservation par l’utilisateur de l’une de ses obligations prévues à l’article 4 ci-dessus, et à l’inobservation des règles d’Hygiène et de Sécurité.</li>
                        <br><li>Chaque partie est tenue au secret professionnel à l’égard des tiers, non seulement sur les activités de l’autre partie touchant au domaine des travaux prévus par le présent contrat, mais encore sur les autres activités de l’autre partie dont elle a pu avoir connaissance à l’occasion de l’exécution de ce contrat.</li>
                        <br><li>Chaque partie ne pourra faire de publications ou communications écrites ou orales relatives aux travaux ou aux activités de l’autre partie dont elle a pu avoir connaissance lors de l’exécution du présent contrat, qu’après autorisation préalable écrite de l’autre partie.</li>
                        <br><li>Dans le cas où le demandeur aurait vu ses données compromis pour des raisons qui dépassent le contrôle de OMEGA System, l’utilisateur ne pourra réclamer à OMEGA System ni indemnité ni remboursement des sommes déboursées pour la production de ces données pour autant que les stipulations du précédent article 4 auront été respectées, étant bien entendu que OMEGA System ne peut garantir une sécurité sans failles du côté de l’hébergeur.</li>
                        <br><li>Pour toutes les contestations relatives à l’interprétation ou à l’exécution du présent contrat, le Droit applicable est le Droit Congolais.</li>
                        <br><li>S’il survient un litige relatif à l’interprétation ou à l’exécution du contrat, OMEGA System tentera d’abord de rechercher une solution à l’amiable avant tout recours aux Tribunaux Congolais spécialisé en la matière.</li>
                      </ol>
                    </div>
                  </div> 
                  <hr>                     
                  
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

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.css'></script>
  <script src="script/Js/script.js"></script>

  <script type="text/javascript">

    //Function to dynamically add input field in the Education section
    $("#rowAdder").click(function () {
      newRowAdd =
        '<div class="row" id="education">' + 
            
          '<div class="col col-sm ml-sm-4 border">' +
                                            
          '<div class="form-row p-2">' +
            '<label for="">Domaine de Formation<strong class="text-danger">*</strong></label>' +
            '<input class="multisteps-form__input form-control" name="formation_un" id="formation_un" type="text" placeholder="Saisissez le domaine de formation" required/>' +
          '</div>' +						
          
          '<div class="form-row p-2 ">' +
            '<label for="">Ecole/Université<strong class="text-danger">*</strong></label>' +
            '<input class="multisteps-form__input form-control" name="institut_etude_un" id="institut_etude_un" type="text" placeholder="Saisissez l\'institution de formation" required/>' +
          '</div>' +
          
          '<div class="form-row p-2">' +
            '<label for="">Certificat/Diplôme<strong class="text-danger">*</strong></label>' +
            '<input class="multisteps-form__input form-control" name="etude_un" id="etude_un" type="text" placeholder="Saisissez votre orientation" required/>' +
          '</div>' +
          
          '<div class="form-row text-left p-2">' +
            
            '<div class="col-sm-3 ">' +
              '<label for="">Début</label>' +
              '<input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>' +
            '</div>' +
            '<div class="col-sm-3">' +
              '<label for="">Fin</label>' +
              '<input class="multisteps-form__input form-control" name="datefin_formation_un" id="datefin_formation_un" type="date" />' +
            '</div>' +
            
            '<div class=" col col-sm">' +
              '<label for="">Pièce jointe </label>' +
              '<input type="file" name="etude_un_piece" id="etude_un_piece" class="btn btn-primary " accept="image/png, image/jpeg, .pdf">' +                                   
              '<small><i>png, jpeg, pdf</i></small>' +
            '</div>' +                                                          
          '</div>' +						
          '</div>' +			
          
          '<div class="col-sm-2 pt-sm-0">' +
          '<button class="btn btn-outline-danger" type="button" id="DeleteRow" title="DeleteRow">Supprimer</button>' +
          '</div>' +
        '</div>'

			$('#newinput').append(newRowAdd);
        });
  
		//Supprimer une instance de formation
		$("body").on("click", "#DeleteRow", function () {
            $(this).parents("#education").remove();
    });
    


    //Function to clear all input fields
    function clearTextBoxes(){
      var elements = document.getElementsByTagName("input");
      for (var ii=0; ii < elements.length; ii++) {
        if (elements[ii].type == "text" || elements[ii].type == "email" || elements[ii].type == "number" || elements[ii].type == "date") {
          elements[ii].value = "";
        }
      }
    }
    

    //Field validation functions
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