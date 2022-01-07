<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (isset($_POST["pseudo"])&& isset ($_POST["email"])){
        $pseudo = $_POST["pseudo"];

        $email = $_POST["email"];
        

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Profil</title>
</head>
<body>
    <h1 class="m-5 text-center">Page de profil</h1>
    <ul class="list-group container">
        <li class="list-group-item"> Pseudo : <?= $_POST["pseudo"]; ?> </li>
        <li class="list-group-item"> Email : <?= $_POST["email"]; ?></li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>