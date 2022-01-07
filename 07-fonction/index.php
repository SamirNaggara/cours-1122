<?php
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        if (isset($_GET["prenom"])&& isset ($_GET["ville"])){
            $prenom = $_GET["prenom"];

            $ville = $_GET["ville"];
    
            if ($ville == "Paris"){
    
                $message = "$prenom tu as choisi Paris alors tu es Parisien(ne)";
    
            }elseif ($ville =="Marseille"){
    
                $message = "$prenom tu as choisi Marseille alors tu es Marseillais(e)";

            }elseif ($ville =="Lyon"){
    
                $message = "$prenom tu as choisi Lyon alors tu es Lyonnais(e)";
 
            }elseif($ville ==""){
    
                $message = "Attention tu n'as pas bien renseigné le formulaire";

            }
        }

        if (isset($_GET["prenom2"])&& isset ($_GET["recette"])){
            $prenom2 = $_GET["prenom2"];

            $recette = $_GET["recette"];
    
            if ($recette == "Brownie"){
    
                $message = "Bravo $prenom2, tu as choisis le Brownie, c'est un bon choix !!" . "<img src=\"images/brownie.png\" alt=\"brownie\">";
    
            }elseif ($recette == "Tarte citron"){
    
                $message = "Bravo $prenom2, tu as choisis la Tarte citron, c'est un excellent choix !!" . "<img src=\"images/tarte citron.png\" alt=\"tarte citron\">";

            }elseif ($recette == "Flan"){
    
                $message = "Bravo $prenom2, tu as choisis le Flan, c'est un choix interrassant!!" . "<img src=\"images/flan.png\" alt=\"flan\">";
 
            }elseif($recette ==""){
    
                $message = "Attention tu n'as pas bien renseigné le formulaire";

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
        <title>Les fonctions en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        
    <h3>Fonction addition<br><br></h3>
        <?php 


            /**
             * @param int, int
             * @return int
             * La fonction addition prends nombre1 et nombre2 en parametre
             * Et renvoie le résultat de l'addition
             */
            function addition(int $nombre1,int $nombre2){
                $calcul = $nombre1 + $nombre2;

                return $calcul;

            }
            // J'appelle la fonction addition et je l'affiche
            echo addition(14,26) . "<br>";

            // J'appelle la fonction et je l'enregistre dans resultat
            $resultat = addition(6,3);
            $resultat1 = addition(12,3);
            $resultat2 = addition(-3,3);
            $resultat3 = addition(6,5);
            $resultat4 = addition(6,12);
            echo $resultat . "<br>";

        ?><br><br><h3>Creation d'une fonction avec une chaine de caracteres en argument</h3><br><br><?php
            // Creer une fonction qui prends en argument une chaine de caractere, et qui nous renvoie les 10 premiers caractères de la chaine

            function couperChaine10(string $chaine){
                $chaineCoupee = substr($chaine,0,10);
                return $chaineCoupee;
            }
                echo couperChaine10("Ma chaine de caracteres") . "<br>";
                echo couperChaine10("Vivement les vacances") . "<br>";

        ?><br><br><h3>Creation d'une fonction avec liens</h3><br><br><?php

            /* Exercice : Creez une fonction : CreerBouton
            	La fonction prendra en argument le nom du bouton et le lien vers lequel mene le bouton. C'est un bouton lien a
                Afficher 2 boutons, un "google", qui mene vers google, et un wf3 qui mene vers le site de wf3
            
            */
            ?>

            <?php
            function creerLiens(string $lien,string $nom) : string{
                $bouton = "<a href=\"$lien\">$nom</a>";
                return $bouton;

                // On peut aussi le presenter ainsi : 
                // return "<a href=\"$lien\">$nom</a>";
            }
                echo creerLiens( "https://www.google.fr/","Google") . "<br>";
                echo creerLiens( "https://www.wf3.fr/", "wf3") . "<br>";
            
            ?><h3><br><br>Creation d'une fonction avec le prix de TVA</h3><br><br><?php

            /*
            Exercice : Creez une fonction qui calcul le prix TVA à 20% inclus en fonction du prix HT.
            Enregistrer dans des variables le prix TTC de 150  HT et 2600 HT
            
            */
            
            function tva(int $pht,int $tva=20){
                
              $montantTva=($pht*20/100) ;
              $ttc = $montantTva + $pht;

                return $ttc;

            }
            echo $resultat = tva(150) . "<br>";
            echo $resultat = tva(2600) . "<br>";
            echo $resultat = tva(1000) . "<br>";


            function tva3(int $pht){
                
                $montantTva=($pht*1.2) ;
                  
                  return $montantTva;
  
              }
              echo $resultat=tva3(300) . "<br>";

        ?><br><br><h3>Creation d'une fonction avec une TVA variable</h3><br><br><?php

            /*
            Exercice 3 : 
            Reprenez la fonction précédente, mais avec TVA Variable.
            La fonction aura donc 2 arguments, le prix HT, et le taux de TVA
            PTT = (1+taux/100) * PHT 
            
            */
            

            function tva2(int $pht, int $tva2){

                $pttcvar= $pht + ($pht*$tva2/100);
                return $pttcvar;
            
            }
                echo $resultat = tva2(100,5) . "<br>";
                echo $resultat = tva2(200,20) . "<br>";



        ?><br><br><h3>Creation d'une fonction qui prends une liste de prenom en argument</h3><br><br><?php
    
            /* Exercice 4:
            Ecrivez une fonction qui prends une liste de prenom en argument.
            La liste retourne alors la phrase "$prenom, c'est à toi de faire la vaiselle !", avec un prenom choisi au hasard
            
            */
           
            $array = ["Sophie", "Clément", "Marie", "Clovis"];

            function vaisselle(array $array){
                $indice = array_rand($array, 1);
                $choix1 = $array[$indice];

                return $choix1;
            }
            $prenom=vaisselle($array);
            echo $prenom . ",c'est à toi de faire la vaiselle !";


            ?><br><br><h2>Exercices GET</h2><br><br><?php     
            
            ?><br><br><h3>Creation d'un formulaire qui demande le prenom et differents choix de villes</h3><br><br><?php

            /*Exo 1 : Creez un formulaire qui demande le prenom et differents choix de villes (Paris, Lyon, Marseille...)
            Pour chacune de ces villes, une phrase différente sera affichée à l'utilisateur 
            (ex : Tu viens de Paris, tu es forcememnt un bobo !)*/?>
            
            <form action="" method="get">

                <div class="conteneurPrenom">
                    <label for="prenom"> Prenom : </label>
                    <input type="text" id="prenom" name="prenom">
                </div>

                <select class="form-select" aria-label="Default select example" name="ville">
                    <option selected>Choisir une ville</option>
                    <option value="Paris">Paris</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon">Lyon</option>
                </select>
                <input type="submit" value="Valider" class="btn btn-primary mx-auto d-block my-5">

            </form>
            <p class="text-center">
            <?= (isset($message)) ? $message : ""; ?>
            </p>
            
            <?php 
            echo "<br>";
            /*Exo 2 : Creez un formulaire qui contient un champ prénom, et une liste deroulante avec 3 recettes (ex: Brownie, Flan, Tarte au citron)
            Selon le choix dans le formulaire, on fera apparaitre soit une image de brownie, de Flan, ou une tarte au citron.
            Une phrase personnalisée avec le prénom de l'utilisateur sera utilisée (ex: Bravo Denis, tu as choisis le Brownie, c'est aussi mon choix préféré !!)*/?>

            <form action="" method="get">

                <div class="conteneurPrenom">
                    <label for="prenom2"> Prenom : </label>
                    <input type="text" id="prenom2" name="prenom2">
                </div>

                <select class="form-select" aria-label="Default select example" name="recette">
                    <option selected>Choisir une recette</option>
                    <option value="Brownie">Brownie</option>
                    <option value="Tarte citron">Tarte citron</option>
                    <option value="Flan">Flan</option>
                </select>
                <input type="submit" value="Valider" class="btn btn-primary mx-auto d-block my-5">

            </form>
            <p class="text-center">
            <?= (isset($message)) ? $message : ""; ?>
            </p>

            <?php

            echo "<br>";

            /*Exo 3 : Creez un formulaire avec un champ pseudo et un champs mdp
            
            Si le mdp rentré par l'utilisateur n'est pas "ouistiti", on lui renvoie "Désolé pseudo, vous n'avez pas acces a cette page".
            Si le mdp est bon, on lui renvoie, félicitation prenom, nous aussi on adore les ouistiti*/
            
            ?><br><br><h3>Creation d'une fonction egale a 5</h3><br><br><?php

            // Ecrivez une fonction qui renvoie true si le nombre testé est égal à 5 et false sinon
            // Version Pam
            function estEgalA5(int $test){

               if ($test == 5){
                   $resultat = 5;
               }elseif($test != 5){
                   $resultat="faux";
               }
               return $resultat;
            }
            echo estEgalA5(3) . "<br>";
            echo estEgalA5(5) . "<br>";

            // Version Samir

            function estEgalA52(int $test){

                if ($test == 5){
                    return true;//va renvoyer 1
                }
                    return false;//ne va rien renvoyer
                
             }
             echo estEgalA52(3) . "<br>";
             echo estEgalA52(5) . "<br>";

             ?><br><br><h3>Portée de variables</h3><br><br><?php

            // creer une fonction qui calcule la surface d'un rectangle, en fonction de sa largeur et de sa longueur

            function airRectangle(int $longueur, int $largeur){

                $air = $longueur * $largeur;

                return $air;

            }

            echo airRectangle(5,5);

            // Les variables crées dans une fonction font partie d'un espace local et ne peuvent donc pas etre appelés dans un espace global

            // $compteur = 0;
            // function calculSurface(int $largeur,int $longueur){
            //     global $compteur; // Le mot clef global permet de demander a la fonction d'aller chercher la variable dans l'espace global et la ramener dans l'espace local
            //     $compteur++; // Je peux alors incrementer le compteur
            //     $solution = $largeur * $longueur;
            //     return $solution;
            // }
            // echo calculSurface(35,2) . "<br>";
            // echo calculSurface(3,5) . "<br>";
            // echo calculSurface(26,7) . "<br>";
            // echo calculSurface(36,9) . "<br>";
            // echo $compteur; //Je m'attends à $compteur = 4



        ?>

    </body>

</html>
