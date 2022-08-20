<!DOCTYPE html>
<html lang="en-fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Omega System - Login Utilisateur</title>

        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/logo_icon.png" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="script/Css/style.css">
        <link rel="stylesheet" href="script/Css/B_stylepage.css">
        
    </head>
    <body>
        <?php
            session_start();
            //Bays @ code
            //version A0 Oméga System
            //<!--Navbar-->
            include('view/navbar.html');
            
            //<!--Navbar-->
            include_once('controller/user_registration.php');

            //footer omega système
            include('view/footer.html');                
        ?>

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


