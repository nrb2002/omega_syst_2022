<!DOCTYPE html>
<html lang="en-fr" >
<head>
  <meta charset="UTF-8">
  <title>Omega System - Formulaire Consultant</title>

  <!-- Favicon icon -->
  <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="script/Css/style.css">
  <link rel="stylesheet" href="script/Css/B_stylepage.css">
</head>

<body>
<!--Navigation bar-->
<?php //include('../../view/navbar.html')  ?>
<!--Navigation bar-->


<!--PEN HEADER-->
<header class="header">
  <h2 class="header__title">Formulaire d'enregistrement de Consultant</h2>
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
          <div class="col m-auto">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Identité du Consultant</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Education</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Personnes de Réf.</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Coordonnées bancaires</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Soumission</button>
            </div>
          </div>
        </div>

        <!--form panels-->
        <div class="row">
          <div class="col-sm-10 m-auto">
            <form class="multisteps-form__form bg-light" id="form_consultant">

              <!--single form panel - Infos sur le représentant légal-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-light js-active" data-animation="slideHorz">
                <h3 class="multisteps-form__title">Identité du Consultant</h3><hr>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <div class="col">
                        <label for="">Nom</label>
                      </div>
                      <div class="col">
                        <input class="multisteps-form__input form-control" name="nom_consultant" id="nom_consultant" type="text" placeholder="Votre nom de famille"/>
                      </div>                      
                    </div>
                    <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                      <label for="">Postnom</label>
                      <input class="multisteps-form__input form-control" name="postnom_consultant" id="postnom_consultant" type="text" placeholder="Votre postnom"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                      <label for="">Prénom</label>
                      <input name="prenom_consultant" id="prenom_consultant" class="multisteps-form__input form-control" type="text" placeholder="Votre prénom"/>
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
                        <option selected="selected" value="">...</option>
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
                        <option value="congolaise RDC">Congo, RD</option>
                      </select>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm-5 mt-4 mt-sm-0">
                      <label for="">Numéro de téléphone (Inclure l'indicatif)</label>
                      <input class="multisteps-form__input form-control" name="telephone_consultant" id="telephone_consultant" type="text" placeholder="ex: +243-855555555"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse email</label>
                      <input class="multisteps-form__input form-control" name="email_consultant" id="email_consultant" type="email" placeholder="ex: dummy@dummy.com"/>
                    </div>             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-4 mt-sm">
                      <label for="">Adresse Domicile</label>                      
                      <input class="multisteps-form__input form-control" name="adresse_consultant" id="adresse_consultant" type="text" placeholder="rue/avenue, numéro parcellaire, quartier/cité, commune/territoire/village"/>
                    </div>                             
                  </div>
                  <div class="form-row mt-4">                    
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <input class="multisteps-form__input form-control" name="ville_consultant" id="ville_consultant" type="text" placeholder="Ville"/>
                    </div>
                    <div class="col-10 col-sm mt-0 mt-sm">
                      <select class="multisteps-form__select form-control" name="pays_consultant" id="pays_consultant">
                        <option selected="selected" value="">Sélectionnez un pays...</option>
                        <option>Congo, RD</option>
                      </select>
                    </div>                             
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-7">
                      <label for="">Spécialité</label>
                      <input class="multisteps-form__input form-control" type="text" name="specialite" id="specialite"  />
                    </div>
                    <div class="col-10 col-sm">
                      <label for="">Années d'expérience dans le secteur</label>
                      <input class="multisteps-form__input form-control" type="number" name="experience" id="experience" />
                    </div>                    
                  </div> 
                  <br><hr>               
                  
                  <!--Navigation button-->
                  <div class="button-row d-flex mt-4">
                    <button onclick="validation_phase1()" class="btn btn-primary ml-auto js-btn-next" id="btn_suivant1" type="button" title="Next">Suivant</button>
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

                  
              <!--single form panel - Personnes de référence-->
              <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                <h3 class="multisteps-form__title">Personnes de référence</h3>
                <div class="multisteps-form__content">
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                      <label for="">Personne 1</label>
                      <input class="multisteps-form__input form-control" name="noms_personne_un" id="noms_personne_un" type="text" placeholder="Nom complet de la personne"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Organisation/Entreprise</label>
                      <input class="multisteps-form__input form-control" name="organisatio_personne_un" id="organisatio_personne_un" type="text" placeholder="Nom de l'organisation"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Fonction</label>
                      <input class="multisteps-form__input form-control" name="fonction_personne_un" id="fonction_personne_un" type="text" placeholder="Saisissez la fonction"/>
                    </div>                                                          
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Téléphone</label>
                      <input class="multisteps-form__input form-control" name="telephone_personne_un" id="telephone_personne_un" type="text" placeholder="ex: +243-800000000"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse électronique</label>
                      <input class="multisteps-form__input form-control" name="email_personne_un" id="email_personne_un" type="email" placeholder="Saisissez l'adresse email"/>
                    </div>
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                    <label for="">Personne 2</label>
                      <input class="multisteps-form__input form-control" name="noms_personne_deux" id="noms_personne_deux" type="text" placeholder="Nom complet de la personne"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Organisation/Entreprise</label>
                      <input class="multisteps-form__input form-control" name="organisatio_personne_deux" id="organisatio_personne_deux" type="text" placeholder="Nom de l'organisation"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Fonction</label>
                      <input class="multisteps-form__input form-control" name="fonction_personne_deux" id="fonction_personne_deux" type="text" placeholder="Saisissez la fonction"/>
                    </div>                                                          
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Téléphone</label>
                      <input class="multisteps-form__input form-control" name="telephone_personne_deux" id="telephone_personne_deux" type="text" placeholder="ex: +243-800000000"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse électronique</label>
                      <input class="multisteps-form__input form-control" name="email_personne_deux" id="email_personne_deux" type="email" placeholder="Saisissez l'adresse email"/>
                    </div>
                  </div>
                  <br><hr>
                  <div class="form-row mt-4">                    
                    <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                    <label for="">Personne 3</label>
                      <input class="multisteps-form__input form-control" name="noms_personne_trois" id="noms_personne_trois" type="text" placeholder="Nom complet de la personne"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Organisation/Entreprise</label>
                      <input class="multisteps-form__input form-control" name="organisatio_personne_trois" id="organisatio_personne_trois" type="text" placeholder="Nom de l'organisation"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <label for="">Fonction</label>
                      <input class="multisteps-form__input form-control" name="fonction_personne_trois" id="fonction_personne_trois" type="text" placeholder="Saisissez la fonction"/>
                    </div>                                                          
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Téléphone</label>
                      <input class="multisteps-form__input form-control" name="telephone_personne_trois" id="telephone_personne_trois" type="text" placeholder="ex: +243-800000000"/>
                    </div>
                    <div class="col-10 col-sm mt-4 mt-sm-0">
                      <label for="">Adresse électronique</label>
                      <input class="multisteps-form__input form-control" name="email_personne_un" id="email_personne_trois" type="email" placeholder="Saisissez l'adresse email"/>
                    </div>
                  </div>
                  <br><hr>                                                           
                </div>
                  
                <!--Navigation button-->
                <div class="row">                    
                  <div class="button-row d-flex mt-4 col-12">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                    <button id="btn_suivant2" onclick="validation_phase2()" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
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
                      <input class="multisteps-form__input form-control" name="codeswift" id="codeswift" type="text" placeholder="Code SWIFT"/>
                    </div>
                    <div class="col-10 col-sm-6">
                      <label for="">Numéro de Compte</label>
                      <input class="multisteps-form__input form-control" name="num_compte" id="num_compte" type="text" placeholder="0000-00000-0000-0000000-00"/>
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
                    <div class="col-10 col-sm-3">
                      <label for="">J'ai lu et j'accepte.</label>
                    </div>
                    <div class="col-10 col-sm-1">
                      <input class="form-check-input" type="checkbox" id="check_terme" name="option1" value="something" unchecked required>
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
<?php //include('../footer.html') ?>
<!-- footer -->

<!-- Javascript -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="script/Js/script.js"></script>

<!--Clear all text fields and reload the page-->
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
    var nom_consultant=document.getElementById('nom_consultant');
    var prenom_consultant=document.getElementById('prenom_consultant');
    var btn_suivant1=document.getElementById('btn_suivant1'); 
    var specialite=document.getElementById('specialite');
    var experience=document.getElementById('experience');
    var telephone_consultant=document.getElementById('telephone_consultant');
    var email_consultant=document.getElementById('email_consultant');
   
    if(nom_consultant.value=="" || prenom_consultant.value=="" || specialite.value=="" || experience.value=="" || telephone_consultant.value=="" || email_consultant.value=="" ){
      alert("Completez toutes les zones obligatoires s'il vous plait")
      btn_suivant1.classList.remove('js-btn-next')
    }
    if(nom_consultant.value!="" && prenom_consultant.value!="" && specialite.value!="" && experience.value!="" && telephone_consultant.value!="" && email_consultant.value!=""){
      btn_suivant1.classList.add('js-btn-next')
    }
  }

  function validation_phase2(){
    var noms_personne_un=document.getElementById('noms_personne_un');
    var organisatio_personne_un=document.getElementById('organisatio_personne_un');
    var btn_suivant2=document.getElementById('btn_suivant2'); 
    var fonction_personne_un=document.getElementById('fonction_personne_un');
    var telephone_personne_un=document.getElementById('telephone_personne_un');
   
    if(noms_personne_un.value=="" || organisatio_personne_un.value=="" || fonction_personne_un.value=="" || telephone_personne_un.value=="" ){
      alert("Completez toutes les zones obligatoires s'il vous plait")
      btn_suivant2.classList.remove('js-btn-next')
    }
    if(noms_personne_un.value!="" && organisatio_personne_un.value!="" && fonction_personne_un.value!="" && telephone_personne_un.value!=""){
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