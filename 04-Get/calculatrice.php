<?php

    /* Exercice :
    1_ Creez 3 champs :
        Un champ nombre
        Un champ opérateur avec les choix "addition, soustration, multiplication, division"
        Un champ nombre
        Le bouton de validation
    2_ Afficher le resultat de l'operation

    */

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    if (isset($_GET["nombre1"]) && 
        isset($_GET["nombre2"]) && 
        isset($_GET["operateur"])){

            $nombre1 = $_GET["nombre1"];
            $nombre2 = $_GET["nombre2"];
            $operateur = $_GET["operateur"];

            if ($operateur == "addition"){
                $resultat = $nombre1 + $nombre2;
            }elseif ($operateur == "soustraction"){
                $resultat = $nombre1 - $nombre2;
            }elseif ($operateur == "multiplication"){
                $resultat = $nombre1 * $nombre2;
            }elseif ($operateur == "division"){
                $resultat = $nombre1 / $nombre2;
            }else{
                $resultat = "Il y a un problème avec l'opérateur";
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
        <title>GET</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        
        

        <h1 class="text-center my-5">Calculatrice</h1>

        <form action="" method="get">

            <div class="conteneurNombre1">
                <label for="nombre1">Nombre : </label>
                <input type="number" id="nombre1" name="nombre1">
            </div>
            <div class="conteneurOperateur">
                <label for="operateur">Operateur : </label>
                <select name="operateur" id="operateur">
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                </select>
            </div>
            <div class="conteneurNombre2">
                <label for="nombre2">Nombre : </label>
                <input type="number" id="nombre2" name="nombre2">
            </div>
            <input type="submit">
    
            

        </form>

        <p class="resultat text-center"><?= (isset($resultat)) ? "Le résultat est $resultat" : "Remplissez les champs et cliquez sur envoyer pour faire un calcul"; ?></p>

        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
