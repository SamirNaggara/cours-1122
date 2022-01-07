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
        <?php  
            echo "<p>Hello World ! </p>";  
            // Echo et print permettent d'afficher les éléments en html
            print("<p>Hello World 2 ! </p>"); 
            // print est très rarement utilisé

        ?>

        <p>Je peux écrire du html après les balises php</p>

        <?php echo "<p>Encore une ligne, mais en php</p>" ?>
        <p>Coucou <?= "Pamela" ?> </p>

        <?php
        /*
        <?= signifie <?php echo
        Cela permet d'ouvrir le php et de placer un echo rapidement
        */
        /*
        Pour celles qui n'ont pas les erreurs qui s'affichent correctement : 
        1_Ecrire phpinfo(); en php
        2_Trouver le fichier php.ini
        3_Modifier la valeur de display_errors sur On
        4_Restart xampp
        */
        phpinfo();

        ?>

       
        
    </body>

</html>
