<?php
    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";
    
    if (isset($_COOKIE["lang"]) && !isset($_GET["lang"])){

        if ($_COOKIE["lang"] == "fr"){

            //header location sous cette forme permet de faire une redirection vers un autre URL
            //On utilise toujours avec un exit() juste apres pour eviter des erreurs

            header("location:?lang=fr");
            exit();

        }elseif($_COOKIE["lang"]=="en"){

            header("location:?lang=en");
            exit();

        }
    }

/*
1_ Creez 2 bouton en front
    Un bouton a "Site en Francais" qui ajoute "?lang=fr"
    Un bouton a "English Website" qui ajoute "?lang=en"

2_ Debrouillez vous pour que 
        -> S'il n'y a rien dans l'url, ce sont les boutons a précedemment créées qui apparaissent sur la page
        -> S'il y a lang=fr, alors c'est la phrase "Bienvenue sur la version française du site" qui apparait
        -> S'il y a lang=en, alors c'est la phrase "Welcome to the english version of the website"
*/
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    // S'il y a lang=fr, alors c'est la phrase "Bienvenue sur la version française du site" qui apparait

    if (isset($_GET["lang"])){

        if ($_GET["lang"] == "fr"){

            $aAfficher = "<h2 class=\"text-center\">Bienvenue sur la version française du site </h2>";

            setcookie("lang", "fr", time() + 60*60*24*90);

        }elseif($_GET["lang"] == "en"){

            $aAfficher = "<h2 class=\"text-center\">Welcome to the english version of the website </h2>";

            setcookie("lang", "en", time() + 60*60*24*90);

        }

        
    }else{
          $aAfficher = "<a class=\"btn btn-warning\" href=\"?lang=fr\" role=\"button\" name=\"fr\">Site en Francais</a>
                        <a class=\"btn btn-info\" href=\"?lang=en\" role=\"button\" name=\"en\">English Website</a>";
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
        <title>Langage</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        

        <?php
           echo $aAfficher;
        ?>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>