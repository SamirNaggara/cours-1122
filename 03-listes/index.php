<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les listes en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
       <?php

        //2 façons de creer une liste : 
        $listePrenom = ["Meriem", "Pamela", "Janna", "Ali", "Lena"];
        $listePrenom2 = array("Assia", "Lionel", "Kalden", "Hendrix", "Ares");

        //Il n'est pas possible de echo une liste
        // echo $listePrenom;

        // On utilise soit un var_dump, soit un print_r (pour afficher une liste)
        echo "<pre>"; //permet d'afficher la liste correctement et pas en une ligne
        var_dump($listePrenom);

        echo "<br><br>";

        echo "<pre>";
        print_r($listePrenom2);

        echo "<br><br>";

        // Recuperer un élément de la liste

        echo $listePrenom[2];

        // Ajouter un prenom à la liste prenom

        $listePrenom[] = "Khahaha";

        echo "<pre>";
        var_dump($listePrenom);

        // Modifier un prenom dans la liste

        $listePrenom[3] = "Mahmoud";

        echo "<pre>";
        var_dump($listePrenom);

        // Obtenir la taille d'une liste

        echo count($listePrenom) . "<br>";
        echo sizeof($listePrenom) . "<br>";

        // Parcourir une liste par la valeur

        foreach($listePrenom as $valeur){
            echo "- $valeur<br>";
            
        }
        echo "<br><br>";

        // Parcourir par clef/valeur (index/valeur du tableau)

        foreach($listePrenom as $clef => $valeur){
            echo "$clef - $valeur" . "<br>";
            
        }
        echo "<br><br>";
        // Exercice : A l'aide d'une boucle foreach, afficher que les prenoms qui sont inferieur ou égale à 5 caractères 
        // pour chaque élément de la liste, si la valeur est inferieur à 5 alors je l'affiche

        foreach($listePrenom as $valeur){
            if(strlen($valeur)<=5){
                echo $valeur . "<br>";
            }
        }

        echo "<br><br>";

        // Exercice : Afficher les elements de la liste Prenom 2 numéroté en commençant par 1

        foreach($listePrenom2 as $cle => $valeur){
            $numerotation = $cle + 1;
            echo "$numerotation - $valeur<br>";
        }

        // Tableau associatif
        $couleur = array(
            "red" => "#FF0000",
            "green" => "#00FF00",
            "blue" => "#0000FF"
        );

        echo "<pre>";
        print_r($couleur);
        echo "</pre>";

        echo $couleur["green"];

        echo "<br><br>";


        // Exercice : Ecrivez autant de fois qu'il y a de couleur la phrase suivante
        // Le code hexadecimal de la couleur MACOULEUR est MONCODEXA

        foreach($couleur as $index => $item){
            echo "Le code hexadecimal de la couleur $index est $item. <br>";
        }




        // La balise <pre></pre> respecte les espaces et decalages utiliser dans le code
        // Pour espacer des mots on utilise &nbsp on appelle cela un espace insecable

       ?>
        
    </body>

</html>
<!-- Exercice creer un formulaire avec le nom et prenom -->
