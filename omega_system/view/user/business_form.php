<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Omega System - Enregistrement Entreprise</title>

  <link rel="icon" href="../../assets/images/logo_icon.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../../script/Css/style.css">
  <link rel="stylesheet" href="../../script/Css/B_stylepage.css">
</head>
<body>

  <!--Navigation bar-->
  <?php include('../navbar.html') ?>

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
              <button class="multisteps-form__progress-btn" type="button" title="Bank info">Coordonnées bancaires</button>
              <button class="multisteps-form__progress-btn" type="button" title="Attachments">Pièces jointes</button>
              <button class="multisteps-form__progress-btn" type="button" title="Submit">Soumission</button>
            </div>
          </div>
        </div>

        <!--form panels-->
        <div class="row">
          <div class="col-sm-10 m-auto">
            <form class="multisteps-form__form bg-light" >
              
              <!--single form panel - Détails sur l'entreprise-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-light js-active" data-animation="slideHorz">
                <h3 class="multisteps-form__title">Détails sur l'entreprise</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Dénomination</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Nom de l'entreprise en toutes lettres"/>
                    </div>
                    <div class="col-10 col-sm-2 mt-4 mt-sm-0">
                      <label for="">Sigle</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Sigle"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Création</label>
                      <input class="multisteps-form__input form-control" type="date" />
                    </div>                   
                  </div>
                  <div class="form-row mt-4">
                    <label for="">Objectif</label>
                    <textarea class="multisteps-form__textarea form-control" maxlength=300 placeholder="Decrire brièvement l'objectif de l'entreprise"></textarea>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Type (Forme juridique)</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez la forme juridique</option>
                        <option>Etablissement</option>
                        <option>SARL</option>
                        <option>SA</option>
                        <option>ASBL</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Catégorie</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez une catégorie</option>
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
                      <input class="multisteps-form__input form-control" type="number" value="1"/>
                    </div>
                  </div>                    
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm">
                      <label for="">Chiffre d'affaires annuel (en USD)</label>
                      <input class="multisteps-form__input form-control" type="number" />
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Capital social (en USD)</label>
                      <input class="multisteps-form__input form-control" type="number" />
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Secteur d'activités</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un secteur...</option>
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
                      <input class="multisteps-form__input form-control" type="text" placeholder="ex: +243-855555555"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email</label>
                      <input class="multisteps-form__input form-control" type="email" placeholder="ex: dummy@dummy.com"/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-sm">
                      <label for="">Siège social</label>                      
                      <input class="multisteps-form__input form-control" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village"/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-sm">
                      <label for="">Adresse d'exploitation</label>                      
                      <input class="multisteps-form__input form-control" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village"/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                                
                 
                  <!--Navigation buttons-->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
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
                      <input class="multisteps-form__input form-control" type="text" placeholder="Votre nom de famille"/>
                    </div>
                    <div class="col-10 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Postnom</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Votre deuxième prénom"/>
                    </div>
                    <div class="col-10 col-sm-4">
                      <label for="">Prénom</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Votre premier prénom"/>
                    </div>                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Lieu de Naissance</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Ville, Pays"/>
                    </div>
                    <div class="col-10 col-sm-3 mt-4 mt-sm-0">
                      <label for="">Date de Naissance</label>
                      <input class="multisteps-form__input form-control" type="date" />
                    </div>                    
                    <div class="col-10 col-sm-1">
                      <label for="">Sexe</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">...</option>
                        <option>M</option>
                        <option>F</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-4">
                      <label for="">Etat Civil</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">...</option>
                        <option>Célibataire</option>
                        <option>Marié(e)</option>
                        <option>Divorcé(e)</option>
                        <option>Veuf(veuve)</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm-3">
                      <label for="">Nombre d'enfants</label>
                      <input class="multisteps-form__input form-control" type="number" value="0"/>
                    </div>
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Pays de Nationalité</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Numéro de téléphone (Inclure l'indicatif)</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="ex: +243-855555555"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email</label>
                      <input class="multisteps-form__input form-control" type="email" placeholder="ex: dummy@dummy.com"/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-4 mt-sm">
                      <label for="">Adresse Domicile</label>                      
                      <input class="multisteps-form__input form-control" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village"/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-7">
                      <label for="">Fonction (ex: PDG, Gérant, Fondateur, Consultant ...)</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez une fonction...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Années d'expérience dans le secteur</label>
                      <input class="multisteps-form__input form-control" type="number" value="0"/>
                    </div>                    
                  </div> 
                  <br><hr>               
                  
                  <!--Navigation button-->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
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
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un domaine de formation...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div> 
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                                                          
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Formation 2</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un domaine de formation...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div> 
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
                      </div>
                    </div>                                                          
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Formation 3</label>
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Sélectionnez un domaine de formation...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Début</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div> 
                    <div class="col-10 col-sm-3 mt-3 mt-sm-0">
                      <label for="">Fin</label>
                      <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                    </div>                                       
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-5 mt-sm-0">
                      <label for="">Certificat/Diplôme obtenu</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Ecole/Université</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Saisissez votre nom de famille"/>
                    </div>
                    <div class="col-12 col-sm">
                      <label for="">Pièce jointe</label>
                      <div class="button-row d-flex mt-0">
                        <button class="btn btn-primary " type="button" title="attachment">Joindre...</button>                      
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
                  <!--Attachments-->                  
                  </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                    </div>
                  </div>
                </div>
              

              <!--single form panel - Termes et conditions-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Termes et conditions</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4 border m-auto">                    
                    <div class="col-10 col-sm-6">
                      <label for="">J'ai lu et j'accepte les <a href="conditions.html" target="_blank">termes et conditions</a></label>
                    </div>
                    <div class="col-10 col-sm-1">
                      <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" unchecked>
                    </div>
                    
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <a class="ml-auto" href="confirmation.php"><button class="btn btn-success" type="button" title="Send">Soumettre</button></a>
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
<?php include('../footer.html') ?>
<!-- footer -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>

  <script src="../../script/Js/script.js"></script>

  <script>
    function clearTextBoxes(){
    var elements = document.getElementsByTagName("input");
    for (var ii=0; ii < elements.length; ii++) {
      if (elements[ii].type == "text" || elements[ii].type == "email" || elements[ii].type == "number" || elements[ii].type == "date") {
        elements[ii].value = "";
      }
    }
  }
  </script>

</body>
</html>