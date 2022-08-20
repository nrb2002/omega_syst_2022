<!DOCTYPE html>
<html lang="en">
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
        <!--single form panel - Langues-->
        <div class="container shadow p-4 rounded " data-animation="slideHorz">
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
                            <input class="multisteps-form__input form-control" name="language" id="language" type="text" placeholder="Saisissez une langue" required/>
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
        

        <!-- Javascript -->

        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
            
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        

        <script type="text/javascript" src="script/Js/form.dynamic-inputs.js"></script>
        <script type="text/javascript" src="script/Js/script.js"></script>
    </body>
</html>