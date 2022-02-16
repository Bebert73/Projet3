<?php

include_once './config_php/Database.php';
$database = new Database();
$db = $database->getConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin</title>
</head>

<body class="admin">

<a href="form_add.php"><button class="btn-grad">Ajouter des logements</button></a>
<a href="create_categorie.php"><button class="btn-grad">Ajouter une catégorie</button></a>

</body>

</html>