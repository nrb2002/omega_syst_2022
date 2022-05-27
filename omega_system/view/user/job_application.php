<!DOCTYPE html>
<html lang="en-fr" >
    <head>
        <meta charset="UTF-8">
        <title>Curriculum Vitae</title>

        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        
        <link rel="stylesheet" href="script/Css/B_stylepage.css">
        <link rel="stylesheet" href="script/Css/style.css">
    </head>

    <body>
        
        <!--PEN HEADER-->
        <header class="header">
            <h2 class="header__title">Formulaire de Candidature</h2>
            <button class="btn btn-outline-success btn-lg" onclick="clearTextBoxes()">Réinitialiser</button>
        </header>
        <!--PEN CONTENT     -->
        <main class="content mb-3">
            <!--content inner-->
            

                <!--Multistep form main container-->
                <div class="container mb-3">

                    <!--multisteps-form-->
                    <div class="multisteps-form">

                        <!--progress bar-->
                        <div class="row">
                            <div class="col m-auto">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button" title="Opening details">Détails sur l'offre</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Personal info">Informations personnelles</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Education">Etudes</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Experience">Expérience</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Accomplishments">Accomplissements</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Languages" id="language_progress_btn">Langues</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="People of refernce">Références</button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Submission">Soumission</button>
                                </div>
                            </div>
                        </div>

                        <!--form panels-->
                        <div class="row">
                            <div class="col-sm-10 m-auto">
                                <form class="multisteps-form__form bg-light text-left needs-validation" id="form_Candidat" novalidate>

                                    <!--single form panel - Détails sur l'offre d'emploi-->
                                    <div class="multisteps-form__panel shadow p-4 rounded bg-light js-active" data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Détails sur l'offre</h3><hr>
                                        <div class="multisteps-form__content">
                                            <!--Titre de l'offre-->
                                            <div class="form-row mt-sm-4">
                                                <label for="">Poste</label>
                                                <input class="multisteps-form__input form-control" name="position" id="position" type="text" placeholder="Titre du Poste"/>
                                            </div>
                                            <!--Référence de l'offre-->
                                            <div class="form-row mt-sm-4">
                                                <label for="">Référence</label>
                                                <input class="multisteps-form__input form-control" name="position_ref" id="position_ref" type="text" placeholder="Veuillez coller le numéro de référence de l'offre ici"/>
                                            </div>  
                                            <!--Dates de l'offre-->                    
                                            <div class="form-row mt-sm-2">
                                                <div class="col col-sm">
                                                    <label for="">Date de publication</label>
                                                    <input class="multisteps-form__input form-control" name="posting_date" id="posting_date" type="date" />
                                                </div>
                                                <div class="col col-sm">
                                                    <label for="">Date d'expiration</label>
                                                    <input class="multisteps-form__input form-control" name="closing_date" id="closing_date" type="date" />
                                                </div>              
                                            </div>
                                            
                                                                
                                        </div>
                                        
                                        <!--Navigation button-->
                                        <div class="button-row d-flex mt-4">
                                            <button onclick="validation_phase1()" class="btn btn-primary ml-auto js-btn-next" id="btn_suivant1" type="button" title="Next">Suivant</button>
                                        </div>
                                        
                                    </div>

                                    <!--single form panel - Informations personnelles du candidat-->
                                    <div class="multisteps-form__panel shadow p-4 rounded bg-light" data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Informations personnelles</h3><hr>
                                        <div class="multisteps-form__content">
                                            <!--Nom complet-->
                                            <div class="form-row mt-sm-4">
                                                <div class="col col-sm">
                                                    <label for="firstname">Prénom<strong class="text-danger">*</strong></label>
                                                    <input class="multisteps-form__input form-control" name="firstname" id="firstname" type="text" placeholder="Premier prénom" required/>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Veuillez fournir votre prénom avant de continuer. 
                                                </div>
                                                <div class="col col-sm">
                                                    <label for="middle_name">Postnom</label>
                                                    <input class="multisteps-form__input form-control" name="middle_name" id="middle_name" type="text" placeholder="Deuxième prénom"/>
                                                </div>
                                                <div class="col col-sm">
                                                    <label for="lastname">Nom <strong class="text-danger">*</strong></label>
                                                    <input class="multisteps-form__input form-control" name="lastname" id="lastname" type="text" placeholder="Nom de famille" required/>
                                                </div>
                                            </div>                      
                                            <!--Lieu, date de naissance et sexe-->   
                                            <div class="form-row mt-sm-2">
                                                <div class="col col-sm">
                                                    <label for="">Lieu de Naissance</label>
                                                    <input class="multisteps-form__input form-control" name="lieunaiss" id="lieunaiss" type="text" placeholder="Ville, Pays"/>
                                                </div>            
                                                <div class="col col-sm">
                                                    <label for="">Date de Naissance</label>
                                                    <input class="multisteps-form__input form-control" name="datenaiss" id="datenaiss" type="date" />
                                                </div>                    
                                                <div class="col col-sm-2">
                                                    <label for="">Sexe</label>
                                                    <select class="multisteps-form__select form-control" name="sexe" id="sexe">
                                                        <option selected="selected" value="">...</option>
                                                        <option>M</option>
                                                        <option>F</option>
                                                    </select>
                                                </div>                    
                                            </div>
                                            <!--Etat-civil et nombre d'enfants-->
                                            <div class="form-row mt-sm-2">
                                                <div class="col col-sm">
                                                    <label for="">Etat Civil</label>
                                                    <select class="multisteps-form__select form-control" name="etatcivil" id="etatcivil">
                                                        <option selected="selected" value="">...</option>
                                                        <option>Célibataire</option>
                                                        <option>Marié(e)</option>
                                                        <option>Divorcé(e)</option>
                                                        <option>Veuf(veuve)</option>
                                                    </select>
                                                </div>
                                                <div class="col col-sm-4">
                                                    <label for="">Nombre d'enfants</label>
                                                    <input class="multisteps-form__input form-control" name="nbreenfant" id="nbreenfant" type="number"/>
                                                </div>
                                            </div>
                                            <!--Nationalité-->
                                            <div class="form-row mt-4">
                                                <label for="">Nationalité <strong class="text-danger">*</strong></label>
                                                <select class="multisteps-form__select form-control" name="nationalite" id="nationalite" required>
                                                    <option selected="selected" value="">Sélectionnez un pays...</option>
                                                    <option value="congolaise RDC">Congo, RD</option>
                                                </select>
                                            </div>
                                            <!--Numéros de téléphone-->
                                            <div class="form-row mt-4">
                                                <div class="col col-sm">
                                                    <label for="phone1">Téléphone (Professionnel)</label>
                                                    <input class="multisteps-form__input form-control" name="phone1" id="phone1" type="text" placeholder="ex: +243-855555555"/>
                                                </div>
                                                <div class="col col-sm">
                                                    <label for="phone2">Téléphone (Domicile)</label>
                                                    <input class="multisteps-form__input form-control" name="phone2" id="phone2" type="text" placeholder="ex: +243-855555555"/>
                                                </div>
                                            </div>
                                            <!--Adresse email-->
                                            <div class="form-row mt-4">
                                                <label for="">Adresse email</label>
                                                <input class="multisteps-form__input form-control" name="email_Candidat" id="email_Candidat" type="email" placeholder="ex: dummy@dummy.com"/>
                                            </div>             
                                            <!--Adresse domicile-->
                                            <div class="form-row mt-4 pt-sm-2">                    
                                                <label for="">Adresse Domicile</label>
                                                <input class="multisteps-form__input form-control mt-sm-2" type="text" name="avenue" id="avenue" placeholder="rue/avenue/bloc"/>
                                                <input class="multisteps-form__input form-control mt-sm-2" type="text" name="numparcelle" id="numparcelle" placeholder="numéro parcellaire/appartement"/>
                                                <input class="multisteps-form__input form-control mt-sm-2" type="text" name="quartier" id="quartier" placeholder="quartier/cité"/>
                                                <input class="multisteps-form__input form-control mt-sm-2" type="text" name="commune" id="commune" placeholder="commune/territoire"/>
                                                <input class="multisteps-form__input form-control mt-sm-2" name="ville" id="ville" type="text" placeholder="ville/village"/>
                                                
                                                <select class="multisteps-form__select form-control mt-sm-2" name="pays_Candidat" id="pays_Candidat">
                                                    <option selected="selected">Sélectionnez un pays...</option>
                                                    <option>Congo, RD</option>
                                                </select>
                                            </div> 
                                            <!--Brève description-->
                                            <div class="form-row mt-4 pt-sm-2">
                                                <label for="duties">Brève description</label>
                                                <textarea class="multisteps-form__input form-control" rows="4" name="key-qualifications" data-mdb-showcounter="true" maxlength="500" id="key-qualifications" placeholder="Saissez vos compétences-clés par rapport à l'offre."></textarea>
                                                <div class="form-helper"><div class="form-counter"></div></div>
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

                                    <!--single form panel - -Etudes faites-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Etudes faites</h3>
                                        <div class="multisteps-form__content">
                                            <hr>                                        
                                            <!--Education ou Formation suivie-->
                                            <div class="row" >
                                                <!--Une instance de Formation-->	
                                                <div class="row mb-3 mt-sm-2" id="education">
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
                                                            <div class="col col-sm ">
                                                                <label for="">Début</label>
                                                                <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                                                            </div> 
                                                            <div class="col col-sm">
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
                                                <div id="newinput"></div>
                                            
                                            </div>
                                        
                                            <!--Bouttons pour ajouter une formation-->			
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

                                    <!--single form panel - Expérience professionnelle-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Expérience professionnelle</h3>
                                        <div class="multisteps-form__content">
                                            <hr>
                                            <!--Une instance d'expérience-->	
                                            <div class="row mb-3 mt-sm-2" id="education">
                                                <!--Champs de saisie pour une expérience-->	
                                                <div class="col col-sm ml-sm-4 border">
                                                    <!--Poste-->																	
                                                    <div class="form-row p-2">
                                                        <label for="past_position">Poste/Fonction<strong class="text-danger">*</strong></label>
                                                        <input class="multisteps-form__input form-control" name="past_position" id="past_position" type="text" placeholder="Saisissez le domaine de formation" required/>
                                                    </div>							
                                                    <!--Nom de l'entreprise-->
                                                    <div class="form-row p-2 ">
                                                        <label for="business_name">Nom de l'Entreprise<strong class="text-danger">*</strong></label>
                                                        <input class="multisteps-form__input form-control" name="business_name" id="business_name" type="text" placeholder="Saisissez l'institution de formation" required/>
                                                    </div>
                                                    <!--Localisation de l'entreprise-->
                                                    <div class="form-row p-2">
                                                        <label for="business_location">Localisation de l'Entreprise<strong class="text-danger">*</strong></label>
                                                        <input class="multisteps-form__input form-control" name="business_location" id="business_location" type="text" placeholder="Saisissez votre orientation" required/>
                                                    </div>
                                                    <!--Période de prestation-->
                                                    <div class="form-row text-left p-2">
                                                        <!--Début-->
                                                        <div class="col col-sm">
                                                            <label for="">Début</label>
                                                            <input class="multisteps-form__input form-control" type="date" placeholder="Saisissez votre nom de famille"/>
                                                        </div>
                                                        <!--Début--> 
                                                        <div class="col col-sm">
                                                            <label for="">Fin</label>
                                                            <input class="multisteps-form__input form-control" name="datefin_formation_un" id="datefin_formation_un" type="date" />
                                                        </div>                                                                                                                     
                                                    </div>
                                                    <!--Raison de démission-->
                                                    <div class="form-row p-2">
                                                        <label for="quit_reason">Raison de démission<strong class="text-danger">*</strong></label>
                                                        <textarea class="multisteps-form__input form-control" name="quit_reason" id="quit_reason" placeholder="Saisissez la raison pour laquelle vous avez quitté" required></textarea>
                                                    </div>
                                                    <!--Réalisations-->
                                                    <div class="form-row p-2">
                                                        <label for="duties">Réalisations<strong class="text-danger">*</strong></label>
                                                        <textarea class="multisteps-form__input form-control" rows="4" name="duties" id="duties" placeholder="Saissez les grandes lignes de vos réalisations." required></textarea>
                                                    </div>						
                                                </div>			
                                            
                                                <!--Boutton Supprimer-->
                                                <div class="col-sm-2 pt-sm-0">
                                                    <button class="btn btn-outline-danger" type="button" id="DeleteRow" title="DeleteRow">Supprimer</button>
                                                </div>
                                            </div>
                                            
                                            <!--Nouvelle instance de Formation-->
                                            <div id="newinput"></div>
                                            
                                            <!--Bouttons pour ajouter une formation-->			
                                            <div class="row mt-sm-2 ml-sm-0 p-0">                    
                                                <button class="btn btn-outline-secondary add_item_btn" type="button" id="rowAdder" title="rowAdder">Ajouter une expérience</button>
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

                                    <!--single form panel - Accomplissements-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Accomplissements</h3>
                                        <div class="multisteps-form__content">
                                            <hr>
                                            <!--Une instance d'accomplissement-->	
                                            <div class="row mb-3 mt-sm-2" id="accomplishment">
                                                <!--Champs de saisie pour une accomplissement-->	
                                                <div class="col col-sm ml-sm-4 border">
                                                    <!--Titre -->																	
                                                    <div class="form-row p-2">
                                                        <label for="accomp_title">Titre</label>
                                                        <input class="multisteps-form__input form-control" name="accomp_title" id="accomp_title" type="text" placeholder="Saisissez un accomplissement"/>
                                                        
                                                    </div>							
                                                    <!--Nom de l'entité-->
                                                    <div class="form-row p-2 ">
                                                        <label for="accomp_entity">Nom de l'Institution</label>
                                                        <input class="multisteps-form__input form-control" name="accomp_entity" id="accomp_entity" type="text" placeholder="Saisissez le nom l'institution." />
                                                    </div>
                                                    <!--Localisation de l'entité-->
                                                    <div class="form-row p-2">
                                                        <label for="entity_location">Localisation de l'Institution</label>
                                                        <input class="multisteps-form__input form-control" name="entity_location" id="entity_location" type="text" placeholder="Saisissez le nom de l'Institution" />
                                                    </div>
                                                    
                                                    <!--Date & Pièce jointe-->
                                                    <div class="form-row">
                                                        <div class="col col-sm">
                                                            <label for="">Date</label>
                                                            <input class="multisteps-form__input form-control" type="date"/>
                                                        </div>
                                                        <div class="col col-sm">                                                        
                                                            <label for="accomp_file">Pièce jointe </label>								
                                                            <input type="file" name="accomp_file" id="accomp_file" class="btn btn-primary " accept="image/png, image/jpeg, .pdf">                                   
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
                                            <div id="newinput"></div>
                                            
                                            
                                        
                                            <!--Bouttons pour ajouter une expérience-->			
                                            <div class="row mt-sm-2 ml-sm-0 p-0">                    
                                                <button class="btn btn-outline-secondary add_item_btn" type="button" id="rowAdder" title="rowAdder">Ajouter un accomplissement</button>
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

                                    <!--single form panel - Langues-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Langues</h3>
                                        <hr>
                                        <!-- HIDDEN DYNAMIC ELEMENT TO CLONE -->
                                        <!-- you can replace it with any other elements -->
                                        <div class="form-group dynamic-element" style="display:none">
                                            <!-- Replace these fields -->
                                            <!--Une instance d'une langue-->	
                                            <div class="form-row mb-3 mt-sm-2" id="language_row">
                                                <!--Champs de saisie pour une langue-->	
                                                <div class="col col-sm ml-sm-4 border">
                                                    <!--Langue -->																	
                                                    <div class="form-row p-2">
                                                        <label for="language">Langue</label>
                                                        <input class="multisteps-form__input form-control" name="language" id="language" type="text" placeholder="Saisissez une langue"/>
                                                    </div>
                                                    <!--Niveau dans la langue-->
                                                    <div class="form-row">
                                                        <div class="col col-sm">
                                                            <label for="">Parlé</label>                                                            
                                                            <select class="multisteps-form__select form-control" name="language_spoken" id="language_spoken">
                                                                <option selected="selected" value="">...</option>
                                                                <option>Niveau 1</option>
                                                                <option>Niveau 2</option>
                                                                <option>Niveau 3</option>
                                                                <option>Niveau 4</option>
                                                            </select>
                                                        </div>
                                                        <div class="col col-sm">
                                                            <label for="">Ecrit</label>                                                            
                                                            <select class="multisteps-form__select form-control" name="language_written" id="language_written">
                                                                <option selected="selected" value="">...</option>
                                                                <option>Niveau 1</option>
                                                                <option>Niveau 2</option>
                                                                <option>Niveau 3</option>
                                                                <option>Niveau 4</option>
                                                            </select>
                                                        </div>
                                                        <div class="col col-sm">
                                                            <label for="">Lu</label>                                                            
                                                            <select class="multisteps-form__select form-control" name="language_read" id="language_read">
                                                                <option selected="selected" value="">...</option>
                                                                <option>Niveau 1</option>
                                                                <option>Niveau 2</option>
                                                                <option>Niveau 3</option>
                                                                <option>Niveau 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Boutton Supprimer-->
                                                <div class="col-sm-2 pt-sm-0">
                                                    <button class="btn btn-outline-danger delete" type="button" >Supprimer</button>
                                                </div>
                                            </div>
                                            <!-- End of fields-->
                                        </div>
                                        <!-- END OF HIDDEN ELEMENT -->
                                        
                                        <!--Une instance d'une langue-->
                                        <div class="form-group dynamic-language-rows">
                                            <!-- Dynamic element will be cloned here -->
                                            <!-- You can call clone function once if you want it to show it a first element-->
                                        </div>
                                        
                                        <!-- Add Button -->
                                        <div class="form-group mt-sm-2">                                           
                                            <div class="col-md-12">
                                                <p class="btn btn-outline-secondary addLanguageRow">+ Ajouter une langue</p>
                                            </div>
                                        </div>
                                        
                                        <!--Navigation button-->
                                        <div class="row">                    
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Précédent</button>
                                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--single form panel - Personnes de référence-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Personnes de référence</h3>
                                        <div class="multisteps-form__content">
                                        <hr>
                                        <div class="form-row mt-4">                    
                                            <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                                                <label for="">Personne 1</label>
                                                <input class="multisteps-form__input form-control" name="noms_personne_un" id="noms_personne_un" type="text" placeholder="Nom complet de la personne"/>
                                            </div>
                                            <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                            <label for="">Organisation/Entreprise</label>
                                            <input class="multisteps-form__input form-control" name="organisation_personne_un" id="organisation_personne_un" type="text" placeholder="Nom de l'organisation"/>
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
                                            <div class="col-10 col-sm mt-sm-4">
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
                                            <input class="multisteps-form__input form-control" name="organisation_personne_deux" id="organisation_personne_deux" type="text" placeholder="Nom de l'organisation"/>
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
                                            <input class="multisteps-form__input form-control" name="organisation_personne_trois" id="organisatio_personne_trois" type="text" placeholder="Nom de l'organisation"/>
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
                            
                                    <!--single form panel - Signature-->
                                    <div class="multisteps-form__panel shadow p-4 rounded " data-animation="slideHorz">
                                        <h3 class="multisteps-form__title">Signature et engagement</h3>
                                        <div class="multisteps-form__content">
                                            <div class="form-row mt-sm-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Je confirme que les informations fournies dans ce formulaire sont vraies et dignes de confiance.
                                                        J'ai lu et j'accepte les <a href="#" target="_blank">termes et conditions</a>. 
                                                    </label>
                                                    <div class="invalid-feedback">Vous devez cocher avant de continuer. </div>
                                                </div>                                            
                                            </div>

                                            <!--Navigation buttons-->
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
        </main>
        
        <!-- Javascript -->

        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
            
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        

        <script type="text/javascript" src="script/Js/form.dynamic-inputs.js"></script>
        <script type="text/javascript" src="script/Js/script.js"></script>
        <!--Dynamic fields
        <script type="text/javascript">
            //Clone the hidden element and shows it
            $('.add-one').click(function(){
            $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
            attach_delete();
            });


            //Attach functionality to delete buttons
            function attach_delete(){
            $('.delete').off();
            $('.delete').click(function(){
                console.log("click");
                $(this).closest('.form-group').remove();
            });
            }
        </script>-->

        <!--reset input fields-->
        <script type="text/javascript">
            function clearTextBoxes(){
                var elements = document.getElementsByTagName("input");
                for (var ii=0; ii < elements.length; ii++) {
                if (elements[ii].type == "text" || elements[ii].type == "email" || elements[ii].type == "number" || elements[ii].type == "date") {
                    elements[ii].value = "";
                }
                }
            }
        </script>

        <!--Form validations-->
        <script type="text/javascript">
              

            function validation_phase1(){
                var nom_Candidat=document.getElementById('nom_Candidat');
                var prenom_Candidat=document.getElementById('prenom_Candidat');
                var btn_suivant1=document.getElementById('btn_suivant1'); 
                var specialite=document.getElementById('specialite');
                var experience=document.getElementById('experience');
                var telephone_Candidat=document.getElementById('telephone_Candidat');
                var email_Candidat=document.getElementById('email_Candidat');
            
                if(nom_Candidat.value=="" || prenom_Candidat.value=="" || specialite.value=="" || experience.value=="" || telephone_Candidat.value=="" || email_Candidat.value=="" ){
                alert("Completez toutes les zones obligatoires s'il vous plait")
                btn_suivant1.classList.remove('js-btn-next')
                }
                if(nom_Candidat.value!="" && prenom_Candidat.value!="" && specialite.value!="" && experience.value!="" && telephone_Candidat.value!="" && email_Candidat.value!=""){
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