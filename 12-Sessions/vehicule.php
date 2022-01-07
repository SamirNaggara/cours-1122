<?php
// Exercice 1 : Réaliser un formulaire avec la methode post, et affichez les données

// Marque
// Modele
// Puissance (nombre)
// L'année
// La couleur
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
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Web tutorials"><!--description de la page-->
    <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
    <meta name="author" content="Tavares Pamela"><!--Auteur du site-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicule</title>
    <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" /> 
</head>
<body>
   
<h1 class="m-5 text-center">Choix vehicule</h1>

<form class="container" method="post" action="chauffeur.php">
<div class="input-group mb-3">
    <select class="form-select" aria-label="marque" id="marque" name="marque">
    <option selected>Marque</option>
    <option value="Renault">Renault</option>
    <option value="Peugeot">Peugeot</option>
    <option value="Mercedes">Mercedes</option>
    <option value="BMW">BMW</option>
    <option value="Opel">Opel</option>
    <option value="Toyota">Toyota</option>
    </select>
</div>
<div class="input-group mb-3">
    <select class="form-select" aria-label="model" id="model" name="model">
    <option selected>Model</option>
    <option value="4x4">4x4</option>
    <option value="Citadine">Citadine</option>
    <option value="VU">VU</option>
    </select>
</div>
<div class="input-group mb-3">
    <select class="form-select" aria-label="puissance" id="puissance" name="puissance">
    <option selected>Puissance</option>
    <option value="90">90 chv</option>
    <option value="100">100 chv</option>
    <option value="120">120 chv</option>
    </select>
</div>
<div class="input-group mb-3">
    <select class="form-select" aria-label="annee" id="annee" name="annee">
    <option selected>Année</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    </select>
</div>
<div class="input-group mb-3 ">
    <select class="form-select" aria-label="couleur" id="couleur" name="couleur">
    <option selected>Couleur</option>
    <option value="Noir">Noir</option>
    <option value="Gris">Gris</option>
    <option value="Blanc">Blanc</option>
    </select>
</div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<p class="text-center">
            <?= (isset($marque)&& isset($model)&& isset($puissance)&& isset($annee)&& isset($couleur)) ?>
        </p>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>