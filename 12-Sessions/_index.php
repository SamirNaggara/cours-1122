<?php
print_r($_POST);
//session_start créé la session si elle n'existe pas
//Si elle existe, elle va en recuperer les informations
session_start();

if(isset($_POST["mdp"])){
    if($_POST["mdp"] == "jumeaux"){
        //Le mot de passe est bon

        //On enregistre l'info dans note super global SESSION

        $_SESSION["is_connect"] = true;
    }
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
        <title>Session</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        <form action="" method="post">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp">
            <input type="submit" value="Valider mon mdp">
        </form>
        
       <a href="secrets.php">Devoilez le secret</a>
        
    </body>

</html>
