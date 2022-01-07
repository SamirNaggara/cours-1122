<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fonctions pérdéfinies en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        
        <?php 
        // Le timestamp est le temps en seconde qui s'est écoulé entre l'instant choisi et le 1er janvier 1970 à minuit

        // On découvre dans la documentation que date a besoin d'un parametre, et que le deuxieme est optionnel
        // S'il ne reçois que le format, il renvoie la date du jour selon le format choisi
        // Si on lui renseigne un timestamp, il envoie la date du timestamp
        echo date("j/m/Y H:i:s",) . "<br>"; 
         echo time() . "<br>"; //(renvoi le timestamp)


        // Trouver et utiliser la fonction qui permet de générer un nombre aléatoire entre 0 et 10

        echo rand(0, 10) . "<br>";

        // Retourner juste les 10 premiers caracteres de cette chaine

        $chaine = "Je suis une grande chaine de caractère qui va être coupé";

        echo substr($chaine, 0, 10);

        // Trier cette liste par ordre decroissant
        //sort : croissant
        //rsort : decroissant

        $liste = [9,2,25,36,45,87,95,57];
        
        rsort($liste, SORT_NUMERIC);

        echo "<pre>";
        print_r($liste);
        echo "</pre>";


        // isset() -> Vérifie l'existence.
            // Renvoie true si l'objet existe
            // Renvoie false sinon



        $chaine2 = " mickael jackson ";
        
        // Affichez cette chaine tout en majuscule
        echo strtoupper($chaine2) . "<br>";

        // Affichez cette chaine avec uniquement les premieres lettres de chaque mots en majuscule
        echo ucwords($chaine2) . "<br>";

        // Affichez la chaine sans les espaces avant et apres
        echo trim($chaine2) . "<br>";

        // echo $chaine2;
        ?>

        





    </body>

</html>
