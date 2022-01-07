<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les boucles en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <!-- <link rel="stylesheet" href="css/reset.css" /> -->
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
       <?php
        // while (true){
        //     echo "Je rentre dans ma boucle à l'infinie <br>";
        // }

        // $i=0;
        // while ($i<10){
        //     echo "Je rentre dans ma boucle à l'infinie <br>";
        // }

        // $i=0;
        // while ($i<10){
        //     echo "Je rentre dans ma boucle car la valeur de i augmente <br>";
        //     $i++;
        // }

        // Exercice : a l'aide d'une boucle while, afficher 10 liens a 
        //     -> bouton 1.... Bouton 10
        //     -> href="bouton1"...

                // Version 1
                $i=1;
                while ($i<=10){
                    echo "<a href=\"bouton$i\">Bouton n°$i</a><br>";
                    echo "<a href=\"bouton" . $i . "\">Bouton n°" . $i . "</a><br>";
                    $i++;
                }
                echo "<br><br>";

                // Version 2
                $i=1;
                while ($i<=10){
                    ?>
                    <a href="Bouton"<?=$i?>>Bouton n°<?=$i?></a><br>

                    <?php
                    $i++;
                }
                echo "<br><br>";

        // while (["jean", "marc", "roger"]){

        // }La boucle supprimera le dernier de la liste a chaque fois

        //Boucle for

        for ($i=1; $i<=10; $i++){
            echo "$i<br>";
        }
        echo "<br><br>";

        // Exercice : Afficher une liste deroulante qui affiche des nombres entre 0 et 30
        ?>
            <select name="nbre">
                <?php
                    for($i=0; $i<=30; $i++){
                        echo "<option name=\"nbre\" value=\"$i\"> $i </option>";
                    }
                ?> 
            </select> 
            <input type="submit" name="submitNbre" value="Nbre" />


            <select name="annee">
                <?php
                    for($i=1900; $i<=2020; $i++){
                        echo "<option name=\"annee\" value=\"$i\"> $i </option>";
                    }
                ?> 
            </select> 
            <input type="submit" name="submitNbre" value="Année" />

            <!-- Construire un echiquier comme suit :  -->

            <!-- L1C1 L1C2 L1C3 L1C4 .. L1C20
            L2C1 L2C2 L2C3 L2C4 .. L2C20
            L3C1 L3C2 L3C3 L3C3 .. L3C20
            ... 
            L9C1 L9C2 L9C3 L9C4 .. L9C20  -->

            <table border=1 width=600>
            <?php
            $ligne=10;
            $colonne=20;
                for($i=1;$i<=$ligne; $i++){ 
                ?><tr><?php
                    for($j=1;$j<=$colonne; $j++){
                        ?><td><?php
                    echo  "L" . $i . "C" . $j;  
                    ?></td><?php
                    }
                    ?></tr><?php
                }
                ?></table>


            <!-- Exercice : Afficher les nombres entres 1 et 50, ainsi que leur carré correspondant 

            Le carré de 1 est : 1
            Le carré de 2 est : 4
            Le carré de 3 est : 9

            Le carré de 50 est : 2 500 -->

            <?php
                   echo "<br><br>";

                    for($i=1; $i<=50; $i++){
                        $carre=$i*$i;
                        echo "Le carré de ". $i. " est :" .$carre."<br>";
                    }
            ?> 


    </body>

</html>
