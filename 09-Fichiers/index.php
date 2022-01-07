<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";
$message = "";
if (isset($_FILES["Fichiers"])){

    $message = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
    Je rentre dans le if, donc la photo de profil existe
  </div>";

    // Ici on choisi l'endroit ou va s'enegistrer notre fichier ainsi que le nom qu'il aura
    // A nous de trouver quel nom sera suffisamment unique pour faire en sorte qu'aucun nouveau telechargement ne vienne supprimer les anciennes
    $cheminTelechargement = "telechargements/" . $_POST["pseudo"] . "-" . time() . $_FILES["Fichiers"]["name"];
    
    $type=$_FILES["Fichiers"]["type"];

    if ($type=="image/jpeg"){
        $message = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
        Je rentre dans le if, donc la photo de profil existe
        </div>";
        move_uploaded_file($_FILES["Fichiers"]["tmp_name"], $cheminTelechargement);
    }elseif($type!="image/jpeg"){
        $message = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
        Le document fourni n'a pas le format jpeg
        </div>"; 
    }
    // Faites en sorte que seuls les photos de type jpg soient acceptés
    
}

// Faites en sorte que seuls les photos de type jpg et png soient acceptés
// if ($_FILES["photo_profil"]["type"] == "image/jpeg" 
// || $_FILES["photo_profil"]["type"] == "image/png" 
// || $_FILES["photo_profil"]["type"] == "text/plain"){
// move_uploaded_file($_FILES["photo_profil"]["tmp_name"], $cheminTelechargement);
// }else{
// $msg = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
// Nous n'acceptions que les images en format JPG
// </div>";
// }



?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Web tutorials"><!--description de la page-->
        <meta name="keywords" content="HTML,CSS,JavaScript"> <!--Mot clef de la page-->
        <meta name="author" content="Naggara Samir"><!--Auteur du site-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telechargement de fichiers en PHP</title>
        <link rel="icon" href="images/smiley-tire-la-langue.jpg" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="css/reset.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" /> 
    </head>

    <body>
       
        <h1 class="m-5 text-center">Telechargement de fichiers</h1>
        <?= $message;?>
        <form action="" method="post" class="container" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo">
                <label for="pseudo">Pseudo</label>
            </div>

            <input type="file" name="Fichiers">

            <input type="submit" value="Valider" class="btn btn-primary">
       
       </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
