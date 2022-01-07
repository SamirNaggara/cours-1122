<?php

    /* 1_ Creer un formulaire avec 2 champs
            Un champ prenom
            Un champ natureLettre (Amour ou haine)

        2_ Verifier que vous obtenez les bonnes informations dans l'url -> ?nom=sam&natureLettre=haine

        3_ Verifier à l'aide d'un print_r, que vous obtenez les infos dans le get

        4_ Si le prenom existe, et si nature lettre existe, alors enregistrez les données dans $prenom et $natureLettre

        5_ Affichez en html 
        Si le champ natureLettre est amour : "Ceci est une lettre d'amour pour $prenom"
        Si le champ natureLettre est haine : "Ceci est une letrte de haine pour $prenom" 
    */

        echo "<pre>";
        print_r($_GET);
        echo "</pre>";


    if (isset($_GET["prenom"])&& isset ($_GET["natureLettre"])){
        $prenom = $_GET["prenom"];

        $natureLettre = $_GET["natureLettre"];

        if ($natureLettre == "Amour"){

            $message = "Ceci est une lettre d'amour pour $prenom";

        }elseif ($natureLettre =="Haine"){

            $message = "Ceci est une lettre de haine pour $prenom";
            
        }else{

            $message = "Attention Vous n'avez rien selectionné";
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
        
    <h1 class="text-center my-5">Exercice Valentin</h1>
        <form class="container" method=>
            <div class="form-floating mb-3 w-50 mx-auto">
                <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom" required>
                <label for="prenom">Prenom</label>
            </div>
            <div class="form-floating w-50 mx-auto">
                <label for="natureLettre" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name="natureLettre">
                        <option selected value="">Nature Lettre</option>
                        <option value="Amour">Amour</option>
                        <option value="Haine">Haine</option>
                    </select>
            </div>
            <input type="submit" value="Valider" class="btn btn-primary mx-auto d-block my-5">
        </form>
        <p class="text-center">
            <?= (isset($message)) ? $message : ""; ?>
        </p>

        

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
