<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Faire apparaitre le pseudo et l'adresse de la personne qui a valide le formulaire dans une autre page qu'on va appelé profil.php
    if (isset($_POST["pseudo"])&& isset ($_POST["email"])){
        $pseudo = $_POST["pseudo"];

        $email = $_POST["email"];

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
        <title>post en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>

        <h1 class="m-5 text-center">Formulaire d'inscripton</h1>

        <form class="container" method="post" action="profil.php">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="pseudo "placeholder="pseudo" aria-label="pseudo" aria-describedby="basic-addon1" name="pseudo">
        </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="Password" placeholder="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <p class="text-center">
            <?= (isset($pseudo)) ? $email : ""; ?>
        </p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
