<!DOCTYPE html>
<html lang="en-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omega System - Login Utilisateur</title>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="stylesheet" href="script/Css/B_stylepage.css">
    <link rel="stylesheet" href="../../script/Css/style.css">
    
    
</head>
<body> 
    
    <!--PEN CONTENT     -->
    <div class="content bg-light">
        <!--content inner-->
        <div class="content__inner">

            <!--user login form main container-->
            <div class="container overflow-hidden">
                <!--userlogin-form-->
                <div class="login-form" style="margin: 5% 0 14%;">
                    <!--form title-->
                    <div class="row">
                        <div class="col-sm-10 mt-4 m-auto">
                            <div class="login-form__title text-center">
                                <?php include('view/omega_header.html') ?>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!--user login form panel-->
                    <div class="row">
                        <div class="col-sm-6 m-auto mb-0">
                            <form class="login-form__form border bg-light" method="post" action="index_admin.php">
                                
                                <!--single form panel - User Login-->
                                <div class="login-form__panel shadow p-4 rounded bg-light" data-animation="slideHorz ">
                                    
                                    <div class="login-form__content">
                                        <!--Print error message if field are empty-->
                                        <i style="color: red;"><?php echo  $msg ?></i><br>
                                        <h4>Espace Admin</h4>
                                        <hr>
                                        <!--user login form fields-->
                                        <div class="form-row mt-4">
                                            <div class="col-10 col-sm mt-5 mt-sm-0">
                                                <label for=""><b>Identifiant</b></label> 
                                            </div>                                           
                                            <div class="col-10 col-sm-7 mt-5 mt-sm-0">
                                                <input class="login-form__input form-control" type="text" name="login_admin" id="login_admin" placeholder="Votre identifiant unique" required/>                                        
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-10 col-sm mt-4 mt-sm-0">
                                                <label for=""><b>Mot de passe</b></label> 
                                            </div>                                           
                                            <div class="col-10 col-sm-7 mt-4 mt-sm-0">
                                                <input class="login-form__input form-control" type="password" name="admin_mdp" id="admin_mdp" placeholder="**********" required/>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-10 col-sm mt-4 mt-sm-0">
                                            <input class="" type="checkbox" name="ok" id="ok" required><small> J'ai lu et j'accepte les <a href="#">termes et conditions</a> </small>
                                            </div>
                                        </div>
                                        
                                        <!--login button-->
                                        <div class="button-row row-sm-8 d-flex mt-4">
                                            <div class="col-sm-8 m-auto">
                                                <button type="submit" class="btn btn-success ml-auto" style="width: 250px;" title="Send" value="Acceder">Accéder</button>
                                            </div>                                            
                                        </div>

                                        <!--Unable to login-->
                                        <div class="form-row mt-4 ">
                                            <div class="col-sm text-sm-right">
                                                <small><i><a href="#">Identifiant ou mot de passe oublié?</a></i></small>                                            
                                            </div>                                                                                        
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




    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script src="script/Js/script.js"></script>
    
    <script>
        function ouvreboite(){
            const contain=document.getElementById('contain');
            const boite=document.getElementById('boite');
            contain.style.display='none';
            boite.style.display='block';
        }
        function fermeboite(){
            const contain=document.getElementById('contain');
            const boite=document.getElementById('boite');
            contain.style.display='block';
            boite.style.display='none';
        }

    </script>
</body>
</html>


        
