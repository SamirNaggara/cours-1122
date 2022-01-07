<?php
// Exercice 3 : Realiser un formulaire avec la methode post, et affichez les données

// Nouveau conducteur 

// Nom
// Prenom
// Age
// Permis (liste deroulante)
// Mail
// Ville
// Mot de passe

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (isset($_POST["marque"])&& isset ($_POST["model"])&& isset ($_POST["puissance"])&& isset ($_POST["annee"])&& isset ($_POST["couleur"])){
        $marque = $_POST["marque"];
        $model = $_POST["model"];
        $puissance = $_POST["puissance"];
        $annee = $_POST["annee"];
        $couleur = $_POST["couleur"];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Web tutorials"><!--description de la page-->
    <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
    <meta name="author" content="Tavares Pamela"><!--Auteur du site-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chauffeur</title>
    <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" /> 
</head>
<body>
<h1 class="m-5 text-center">Chauffeur</h1>
<form class="container" method="post" action="">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="nom "placeholder="nom" aria-label="nom" aria-describedby="basic-addon1" name="nom">
        </div>
        <div class="mb-3">
            <input type="prenom" class="form-control" id="prenom" placeholder="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <input type="age" class="form-control" id="age" placeholder="age" name="age">
        </div>
        <div class="mb-3">
            <input type="permis" class="form-control" id="permis" placeholder="permis" name="permis">
        </div>
        <div class="mb-3">
            <input type="mail" class="form-control" id="mail" placeholder="mail" name="mail">
        </div>
        <div class="mb-3">
            <input type="ville" class="form-control" id="ville" placeholder="ville" name="ville">
        </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="Password" placeholder="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<h2 class="m-5 text-center">Vehicule choisi</h2>
    <ul class="container">
        <li class="list-group"> Marque : <?= $_POST["marque"]; ?> </li>
        <li class="list-group"> Model : <?= $_POST["model"]; ?></li>
        <li class="list-group"> Puissance : <?= $_POST["puissance"]; ?></li>
        <li class="list-group"> Année : <?= $_POST["annee"]; ?></li>
        <li class="list-group"> Couleur : <?= $_POST["couleur"]; ?></li>

    </ul>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>

