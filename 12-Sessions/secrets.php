<?php

session_start();
//Je vais chercher à expulser ceux qui n'ont pas is_connect = true dans la session
//Si il n'y a pas de is_connect dans la session ou si is_connect n'est pas true, alors...

if(!isset($_SESSION["is_connect"]) || $_SESSION != true){

    //On effectue une redirection vers index.php
    header("location:index.php?erreur=mdp");
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
        <title>Base d'une page</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>

    <p>Tous les jumeaux d'ici SONT DES FAUX</p>
    </body>

</html>