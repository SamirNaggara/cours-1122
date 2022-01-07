<?php

    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    // Si nom et prenom existent dans la liste GET, alors seulement on affecte $nom et $prenom
    if (isset($_GET["nom"])&& isset ($_GET["prenom"])){
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];   
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
        <title>GET</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        
        <!-- Exercice : Creer un formulaire avec le nom et le prenom -->

        <h1 class="text-center my-5">Mon Formulaire</h1>
        <form class="container">
            <div class="form-floating mb-3 w-50 mx-auto">
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                <label for="nom">Nom</label>
            </div>
            <div class="form-floating w-50 mx-auto">
                <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
                <label for="floatingPassword">Prenom</label>
            </div>
            <input type="submit" value="Valider" class="btn btn-primary mx-auto d-block my-5">
        </form>
        <h2 class="text-center"> <?= (isset($nom)&& isset ($prenom)) ? "Bonjour $nom $prenom" : ""; ?></h2>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
