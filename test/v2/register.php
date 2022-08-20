<!--Insertion l'entête commune à toutes les pages-->
<?php require 'includes/header.php'; ?>


<!--Début le traitement du formulaire en php-->
<?php 

//Validation du formulaire en php
//Vérifier si des données ont été postées dans le formulaire
if(!empty($_POST)){
    
    //Gérer toutes les erreurs possibles en les insérant dans un tableau
    //Si à la fin d'un traitement, le tableau est resté vide, cela signifie qu'il n'y a pas eu d'erreurs et qu'on est passé au traitement
    //Au cas contraire ces erreurs seront recueillies dans le tableau et affichées pour informer l'utilisateur
    $errors = array(); 

    //Vérifier si le pseudo est vide ou s'il contient des caractères invalides
    //Les caractètes sont invalide s'ils ne sont pas alphanumériques; les signes '_' et '.' sont tout de même acceptables
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_.]+$/', $_POST['username'])){
        // Renvoyer un message d'erreur dans le tableau des erreurs
        $errors['username'] = "Pseudo invalide. ";
    }

    //Vérifier qu'une adresse email saisie et qu'elle est valide
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Adresse email invalide. ";
    }

    //Vérifier qu'un mot de passe a été saisi et qu'il est valide
    if(empty($_POST['password']) || ($_POST['password'] != $_POST['password_confirm'])){
        // Renvoyer un message d'erreur dans le tableau des erreurs
        $errors['password'] = "Mot de passe invalide.";
    }

    //Accéder à la base de données seulement si le tableau des erreurs est vide càd, 
    //s'il n'y aucune erreur après validation des champs
    if(empty($errors)){
      //Charger le fichier de la connexion à la base de données
      //require_once charge le fichier une seule fois
      //require_once 'includes/db.php';
      require_once 'includes/db.php';

      //$insertmbr = $bdd -> prepare("INSERT INTO omega_membre(Prenom, Pseudo, Email, Pass) VALUES(?, ?, ?, ?)");
      //$insertmbr -> execute(array($prenom, $pseudo, $mail, $mdp));

      //Crypter le mot de passe
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

      //Construire une requête préparée d'insertion vers la base de données
      $req = $pdo->prepare("INSERT INTO users(username, email, pass) VALUES(?,?,?)");

      //Exécuter la requête
      $req->execute($_POST['username'], $_POST['email'], $password);

      //Message de confirmation
      die("Membre enregistré avec succès!");


      //Debuger les erreurs avec var_dump
      //La function debug se trouve dans le fichier des fonctions 'includes/functions.php'
      debug($errors);
    }

}

?>
<!--Fin le traitement du formulaire en php-->

<!--Début Formulaire d'enregistrement de nouveau membre-->
<div class="form-group">
  <form>
    <h1 class="h3 mb-3 fw-normal">S'enregistrer</h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="username" placeholder="Pseudo" required>
      <label for="username">Pseudo</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="pseudo@example.com" required>
      <label for="email">Adresse email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
      <label for="password">Mot de passe</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Saisissez encore une fois votre mot de passe" required>
      <label for="password_confirm">Confirmation de mot de passe</label>
    </div>

    <div class="checkbox mb-3">
        <br><a href="#">Termes et conditions</a><br>  
        <label><input type="checkbox" value="remember-me" required> J'ai lu et j'accepte.</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Soumettre</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
  
</div>
<!--Fin Formulaire d'enregistrement de nouveau membre-->


<!--Insertion du pied de page-->
<?php require 'includes/footer.php'?>