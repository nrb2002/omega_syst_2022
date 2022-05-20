<!DOCTYPE html>
<html lang="en-fr" >
    <head>
    <meta charset="UTF-8">
    <title>Omega System - Formulaire Candidat</title>

    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    </head>

    <body>


    <!--PEN HEADER-->
    <header class="header">
    <h2 class="header__title">Formulaire de Candidature</h2>
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
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Identité du Candidat</button>
                <button class="multisteps-form__progress-btn" type="button" title="Address">Education</button>
                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Personnes de Réf.</button>
                <button class="multisteps-form__progress-btn" type="button" title="Comments">Soumission</button>
                </div>
            </div>
            </div>

            <!--form panels-->
            <div class="row">
            <div class="col-sm-10 m-auto">

                <form class="multisteps-form__form bg-light" id="form_Candidat">


                <!--single form panel - Infos sur le représentant légal-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-light js-active" data-animation="slideHorz">
                    <h3 class="multisteps-form__title">Identité du Candidat</h3><hr>
                    <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                        <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                        <div class="col">
                            <label for="">Nom</label>
                        </div>
                        <div class="col">

                            <input class="multisteps-form__input form-control" name="nom_Candidat" id="nom_Candidat" type="text" placeholder="Votre nom de famille"/>

                        </div>                      
                        </div>
                        <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                        <label for="">Postnom</label>

                        <input class="multisteps-form__input form-control" name="postnom_Candidat" id="postnom_Candidat" type="text" placeholder="Votre postnom"/>
                        </div>
                        <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                        <label for="">Prénom</label>
                        <input name="prenom_Candidat" id="prenom_Candidat" class="multisteps-form__input form-control" type="text" placeholder="Votre prénom"/>

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

                        <input class="multisteps-form__input form-control" name="telephone_Candidat" id="telephone_Candidat" type="text" placeholder="ex: +243-855555555"/>
                        </div>
                        <div class="col-10 col-sm mt-4 mt-sm-0">
                        <label for="">Adresse email</label>
                        <input class="multisteps-form__input form-control" name="email_Candidat" id="email_Candidat" type="email" placeholder="ex: dummy@dummy.com"/>

                        </div>             
                    </div>
                    <br><hr>
                    <div class="form-row mt-4">                    
                        <div class="col-10 col-sm mt-4 mt-sm">
                        <label for="">Adresse Domicile</label>                      

                        <input class="multisteps-form__input form-control" type="text" name="avenue" id="avenue" placeholder="rue/avenue/bloc"/>
                        <input class="multisteps-form__input form-control" type="text" name="numparcelle" id="numparcelle" placeholder="numéro parcellaire/appartement"/>
                        <input class="multisteps-form__input form-control" type="text" name="quartier" id="quartier" placeholder="quartier/cité"/>
                        <input class="multisteps-form__input form-control" type="text" name="commune" id="commune" placeholder="commune/territoire"/>
                        </div>                             
                    </div>
                    <div class="form-row ">                    
                        <div class="col-10 col-sm mt-0 mt-sm">
                        <input class="multisteps-form__input form-control" name="ville" id="ville" type="text" placeholder="ville/village"/>
                        </div>
                        <div class="col-10 col-sm mt-0 mt-sm">
                        <select class="multisteps-form__select form-control" name="pays_Candidat" id="pays_Candidat">
                            <option selected="selected">Sélectionnez un pays...</option>

                            <option>Congo, RD</option>
                        </select>
                        </div>                             
                    </div>
                    <br><hr>
                    <div class="form-row mt-4">
                        <div class="col-12 col-sm-7">

                        <label for="">Fonction</label>
                        <select class="multisteps-form__select form-control" name="fonction_Candidat" id="fonction_Candidat" >
                            <option selected="selected">Sélectionnez une fonction...</option>
                            <option>PDG</option>
                            <option>Gérant</option>
                            <option>Fondateur</option>
                            <option>Candidat</option>
                        </select>
                        </div>
                        <div class="col-10 col-sm">
                        <label for="">Années d'expérience dans le secteur</label>
                        <input class="multisteps-form__input form-control" name="annexperience" id="annexperience"  type="number" value="0"/>

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
                        <label for="">Formation 2</label>
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
                        <hr>                     
                    
                    <div class="form-row mt-4 border m-auto">                    
                        <div class="col-10 col-sm-3">
                            <label for="">Je témoigne sur honneur que les informations fournies dans ce formulaire sont vraies et dignes de confiance. </label>
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

        <!-- Javascript -->

        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
            
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        

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