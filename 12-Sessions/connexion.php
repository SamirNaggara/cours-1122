<?php 

// 1_Creez un formulaire de connexion dans connexion.php
//     Le mail 
//     Le mdp 

// 2_ Ce formulaire amenera sur la page profil.php 
//     Si le mail est bien "test@test.fr"
//         Et que le mdp est bien "Retard@Samir"

//     Alors on affiche une page de profil
//         Un h1 avec le titre "Page de Profil"
//         Le mail qui s'affiche 

//     Si le mail et le mdp ne sont pas bon, on renvoie sur la page de connexion

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$msg="";


if(isset($_GET["message"])){
    if ($_GET["message"] == "champVide"){
        $msg = "<div class=\"alert alert-danger w-50 d-block mx-auto text-center\" role=\"alert\">
        Veuillez remplir tous les champs
      </div>";
    }
    if ($_GET["message"] == "erreurMailOuMdp"){
        $msg = "<div class=\"alert alert-danger w-50 d-block mx-auto text-center\" role=\"alert\" >
        Votre adresse mail ou mot de passe est incorrect
      </div>";
    }

}
session_start();

if (isset($_SESSION["email"])){
    header("location:profil.php?message=vous_êtes_déjà_connecté");
    exit();

}

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
    <h1 class="my-5 text-center">Formulaire de connexion</h1>
    <form action="profil.php" method="post" class="container" enctype="multipart/form-data">
        <div class="mb-3 w-50 my-5 d-block mx-auto ">
            <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>
        <div class="mb-3 w-50 my-5 d-block mx-auto">
            <input type="password" class="form-control" id="mdp" placeholder="mdp" name="mdp">
        </div>
        <button type="submit" class="btn btn-dark my-5 d-block mx-auto">Connexion</button>
    </form>

    <?= $msg ?>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    </body>

</html>
