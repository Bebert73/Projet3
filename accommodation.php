<?php
include_once './config_php/database.php';
$database = new Database();
$db = $database->getConnection();

$sql = "DELETE FROM accommodation WHERE id = ?";
$q = $db->prepare($sql);


?> 

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Le Bon Gite</title>
</head>


<body>

    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="accommodation.php">Hebergement</a>
            <a href="contact.php">Contactez-nous</a>
            <a href="about.php">A-propos</a>
        </nav>
    </header>

    <main>
        <div class="container">
            
            <div class="formulaire">
            <h1 class="title" style="color:white">Recherche de gite </h1>

            </div>
        </div>

    </main>

    <footer>
        <div class="footbar">

        </div>
    </footer>

</body>

</html>