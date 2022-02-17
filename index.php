<?php


include_once './add_php/connexion.php';



$sql = "SELECT * FROM accommodation";
$result = $db->query($sql);

?> 

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Le Bon Gite</title>
</head>


<body class="home">

    <header>
        <nav>
            <a class="menu" href="index.php">Accueil</a>
            <a class="menu" href="accommodation.php">Hebergement</a>
            <a class="menu" href="contact.php">Contactez-nous</a>
            <a class="menu" href="about.php">A-propos</a>
        </nav>
    </header>

    <main>
        <div class="container">
            
            <div class="formulaire">
            <h1 class="title">Recherche de gite </h1>

                <form action="" method="POST">
                    <div class="form-content">
                        <input type="text" placeholder="Chercher un gite" class="input_index">
                        <input type="date"  class="input_index">
                        <input type="date"  class="input_index">
                        <select name="number_traveller" id="number_traveller" class="input_nombre">
                            <option value="1 Voyageur" >1 Voyageur</option>
                            <option value="2 Voyageurs">2 Voyageurs</option>
                            <option value="3 Voyageurs">3 Voyageurs</option>
                            <option value="4 Voyageurs">4 Voyageurs</option>
                            <option value="5 Voyageurs">5 Voyageurs</option>
                            <option value="6 Voyageurs">6 Voyageurs</option>
                            <option value="7 Voyageurs">7 Voyageurs</option>
                            <option value="8 Voyageurs">8 Voyageurs</option>
                            <option value="9 Voyageurs">9 Voyageurs</option>
                            <option value="10 Voyageurs">10 Voyageurs</option>
                            <option value="11 Voyageurs">11 Voyageurs</option>
                            <option value="12+ Voyageurs">12 et plus</option>
                        </select>                 
                    </div>
                </form>
                <a href="https://youtube.com"><h5 class="search">Search</h5> </a>

            </div>
        </div>
<div class="list_annonces">

    </main>


    
    <footer>
        <div class="footbar">

        </div>
    </footer>

</body>

</html>