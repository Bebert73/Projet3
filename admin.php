<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin</title>
</head>
<body class="home">

<main>
        <div class="container">
            
            <div class="formulaire">
            <h1 class="title">Administrator command </h1>
                <div class="two choices" >
                 <button><a class="button-admin" href="form_add.php">Ajouter des logements</a> </button>
                <button><a class="button-admin" href="create_categorie.php">Ajout de categorie</a> </button>
                </div>

</div>
</div>

</main>
</body>




<?php
include_once './config_php/Database.php';
include_once './add_php/add_hebergement.php';
$database = new Database();
$db = $database->getConnection();?>
<!-- test -->
<br><br>

<!-- hello -->

</html>