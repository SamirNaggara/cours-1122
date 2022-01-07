<?php
// include ramene tout le code contenu dans un fichier, dans le fichier en cours
// Include_once est pareil qu'un include, sauf qu'il s'assure que le fichier n'ai jamais été appelé avant
// Require est pareil que l'include sauf que si l'inclusion echoue, il arrete le programme
// require("inc/head.inc.php");
// require_once("inc/head.inc.php");
// require_once est pareil qu'un require, sauf qu'il s'assure que le fichier n'ai jamais été appelé avant
include_once("inc/head.inc.php");


include_once("inc/header.inc.php");
?>

<main>
    Je suis la page d'accueil
</main>



<?php
include_once("inc/footer.inc.php");
    
?>     

    
