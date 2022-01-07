<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conditionnel en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
        <?php
            // true : dans ma condition
            // false : pas dans ma condition
            if (true){
               echo "Je rentre bien dans ma condition";
            }else{
                echo "Je ne rentre pas dans ma condition";
            }
            echo "<br>";

            $variable = 9;

            // Par default toutes les variables sont considérées comme vrai sauf :
            // 0
            // ""
            // []
            // null 
            // false

            if ($variable){
                echo "Je rentre bien dans ma condition";
             }else{
                 echo "Je ne rentre pas dans ma condition";
             }

            // Que se passe-t-il si ma valeur du if n'est pas un booléen ?
            // La variable stocke des valeurs de type "string"
            $variable = "Coucou";
            echo "La variable = strings -> " . $variable ;
            if ($variable) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            // Avec empty strings
            $variable = "";
            echo "La variable = \"\" OU empty strings -> " . $variable ;
            if ($variable) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }


            // Avec []
            $variable = [];
            echo "La variable = \"\" OU empty array -> " . $variable ;
            if ($variable) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }


            // Avec le nombre 0
            $variable = 0;
            echo "La variable = 0 -> " . $variable ;

            if ($variable) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }


            // Avec null
            $variable = null;
            echo "La variable = null -> " . $variable ;
            if ($variable) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            // Operateurs : 
            /*
            ==         -> Les valeurs sont égales
            ===        -> Les valeurs sont égales et le type aussi
            !=         -> Les valeurs sont differentes
            >          -> Les valeurs sont supérieures à
            >=         -> Les valeurs sont supérieures ou égales à
            <          -> Les valeurs sont inférieures à
            <=         -> Les valeurs sont inférieures ou égales à
            */

            if (2=== "2") {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            // Pour que ce soit vrai, il faut que 2 conditions soient réunient
            /*
            Opérateurs AND ou &&
            Opérateurs OR ou ||
            Operateur XOR (Le ou exclusif)

            */
            if (true AND true) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            if (true OR false) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            //L'opérateur "!" inverse le booleen reçu
            $booleen = true;
            if ($booleen) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            $booleen = true;
            if (!$booleen) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            if (true XOR true) {
                echo "<p>Je rentre bien dans la condition.</p><br>";
            } else {
                echo "<p>Je ne rentre pas dans la condition.</p><br>";
            }

            //Condition Switch

            $test = 7;

            switch ($test){
                case 0:
                    echo "La variable test est égale à 0<br>";
                    break;
                case 1:
                    echo "La variable test est égale à 1<br>";
                    break;  
                case 2:
                    echo "La variable test est égale à 2<br>";
                    break;            
                case 3:
                    echo "La variable test est égale à 3<br>";
                    break;
                case 4:
                    echo "La variable test est égale à 4<br>";
                    break;
                case 5:
                    echo "La variable test est égale à 5<br>";
                    break;
                default:
                    echo '$test n\'est pas un entier entre 0 et 5';
                   
                }


                //Forme Ternaire
                // La forme est une condition en une seule ligne 

                echo (bool) ? "Si Vrai" : "Si Faux"

                // Equivaut 

                if(true){
                    echo "si vrai";
                }else{
                    echo "si faux";
                }
        ?>
    </body>

</html>
