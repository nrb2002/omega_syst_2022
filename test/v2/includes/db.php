<?php

//La connexion pdo prends en paramètre le nom de la base de données, le nom du serveur, le nom de l'utilisateur et son mot de passe
$pdo = new PDO('mysql:dbname=members_db;host=localhost', 'root', '');

//Autoriser l'accès aux constantes numérotant les erreurs php contenue dans la classe PDO
//Chaque fois qu'il y aura une erreur PDO renverra un exception avec le numéro de l'erreur
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Définir la manière de récupérer les informations sous forme d'objet
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
