<?php


include_once './config_php/database.php';
$database = new Database();
$db = $database->getConnection();


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

                <form action="" method="POST">
                    <div class="form">
                        <input type="text" >
                    </div>
                    <div class="form">
                        <input type="date">
                    </div>
                    <div class="form">
                        <input type="date">
                    </div>
                    <div class="form">
                        <select name="number_traveller" id="number_traveller">
                            <option value="1 Voyageur">1 Voyageur</option>
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

    </main>

    <footer>
        <div class="footbar">

        </div>
    </footer>

</body>

</html>