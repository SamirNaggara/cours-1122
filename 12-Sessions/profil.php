<?php
// On demarre la session
session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// Si la session n'existe pas, alors on passera pas les 2 gardes de securités suivant, sinon, on laisse passer sur la page
if (!isset($_SESSION["email"])){

    // Si le mdp n'existe pas ou bien que le mail n'existe pas alors...
    // Ou si le mdp est vide, ou que le mail est vide, alors...
    if(!isset($_POST["mdp"])|| !isset($_POST["email"])
        || empty($_POST["mdp"])|| empty($_POST["email"])){

        // alors redirection vers connexion

        header("location:connexion.php?message=champVide");
        exit();

    }
    // Si ce code est lu ça veut dire que le mot de passe et l'email existent

    // Je cherche a rediriger ceux qui n'ont pas le bon mail ou qui n'ont pas le bon mdp
    if($_POST["email"] != "test@test.fr" || $_POST["mdp"] != "Retard@Samir"){
        header("location:connexion.php?message=erreurMailOuMdp");
        exit();

    }
}

// J'ai passé toutes les sécurités donc je peux enregistrer l'email dans une variable

// Si l'information du mail est dans le post
//     Alors on l'enregistre dans $email
//     Si elle n'est PAS dans le post, alors c'est qu'elle est dans $_SESSION alors on l'enregistre dans $email
    $email= (isset($_POST["email"]) ? $_POST["email"] : $_SESSION["email"]);

    $_SESSION["email"]= $email;

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

    <h1 class="text-center my-5">Page de Profil </h1><br>

    <h2 class="text-center">Adresse mail : <?= $email; ?></h2>







    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    </body>

</html>
