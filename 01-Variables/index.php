<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        <p>
            <?php echo 3+5; ?>
        </p>
            <?php 
            $variable = 3*8;
            echo $variable;
            ?>
        
            <?php
                // Types de variables 

                // Int (entier)
                $nombre = 3;
                echo "<p>La variable nombre est de type :" . 
                gettype($nombre) . "</p>";

                // double
                $nombre = 3.2;
                echo "<p>La variable nombre est de type :" . 
                gettype($nombre) . "</p>";

                // double - float
                $nombre = 2/3;
                echo "<p>La variable nombre est de type :" . 
                gettype($nombre) . "</p>";

                // string
                $texte = "Je suis du texte";
                echo "<p>La variable nombre est de type :" . 
                gettype($texte) . "</p>";

                // booleen (true ou false)
                $booleen = true;
                echo "<p>La variable booleen est de type :" . 
                gettype($booleen) . "</p>";

                // CONCATENATION

                // En php la concatenation s'effectue avec . 
                echo "<p>" . "coucou" . "</p>";
                /*
                Entre quote renvoie le texte tel qu'il est écrit sans l'interpreter
                Entre guillement est capable de comprendre une variable php
                */
                echo '<p>$texte</p>';
                echo "<p>$texte</p>";
                // L'anti-slash \ permet d'échapper un caractere. Celui ci sera considéré comme un caractère html et non lue en php (anti-slash on echape le caractere)
                echo "<p>Ici, le texte : \"$texte\"</p>";

                // ASSIGNATION DE VARIABLE 

                $fruit1 = "Pomme";
                $fruit2 = $fruit1;
                echo "<p>Le fruit 1 est : $fruit1<br>
                         Le fruit 2 est : $fruit2</p>";

                $fruit1 = "Poire";
                echo "<p>Le fruit 1 est : $fruit1<br>
                         Le fruit 2 est : $fruit2</p>";

                // CONSTANTES 

                // On déclare une constante à l'aide de la fonction définie
                // Par convention, la constante sera toujours en majuscule
                define("CAPITAL_FRANCE", "Paris");

                const CAPITAL_PORTUGAL = "Lisbonne";
                
                echo "<p>La capitale de la France est " . CAPITAL_FRANCE . "</p>";
                echo "<p>La capital du Portugal est " . CAPITAL_PORTUGAL . "</p>";

                echo "<br><br>";

                //FILE et LINE sont des constantes magiques
                echo __FILE__ . "<br>";
                echo __LINE__ . "<br>";

                // OPERATEURS ARYTMETIQUES 

                echo "<br><br>";
                echo 1+2 . "<br>";
                echo 1-2 . "<br>";
                echo 1*2 . "<br>";
                echo 1/2 . "<br>";
                echo 21%5 . "<br>"; //Renvoi le reste de la division

                echo "<br><br>";



            ?>
        
    </body>

</html>
