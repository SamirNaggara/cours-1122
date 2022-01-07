<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookies</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        <?php
            // setCookie permet de mettre en place un nouveau cookie 
            // Le cookie sera accessible uniquement par le nom du domaine qui l'a mis en place
            // setCookie prend 3 arguments : Le nom du cookie, le contenu du cookie et la date d'expiration du cookie 
            // La date d'expiration est exprimée en timestamp
            // On utilise alors time() + le nombre de seconde correspondant à la durée de vie du cookie
            setcookie("lastVisit", date("d/m/Y"), time() + 60*60*24*90);

            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";

            // Si le cookie existe alors on peut l'afficher
            if (isset($_COOKIE["nomCookie"])){
                echo $_COOKIE["nomCookie"];
            }
            

        ?>
    </body>

</html>
