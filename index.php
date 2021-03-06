<?php
include_once './config_php/Database.php';
$database = new Database();
$db = $database->getConnection();

$sql = "SELECT * FROM accommodation LIMIT 1 ";
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

    <header class="nav-bar">
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
                <a href="accommodation.php"><h5 class="search">Search</h5> </a>

            </div>
        </div>
<div class="list_annonces">

    </main>
    <div class="formulaire-ra">
    <h1 class="hot">Coup de coeur ???</h1>
    <?php
			while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

				?>
<a href="./add_php/show.php?acco=<?php echo $rows['id'] ?>">
<div class="container_product">
<p class="product_img"><img src="./pic/<?php echo $rows['image']; ?> " alt="" width="270px" height="220px"></p>
<h1 class="product_title"><?php echo $rows['accommodation_title']; ?></h1>
<p class="product_desc"><?php echo $rows['description']; ?></p>
<p class="product_nbr_beds">Nombre de lit: <?php echo $rows['number_of_beds']; ?></p>
<p class="product_nbr_bath">Nombre de salle de bain: <?php echo $rows['number_of_bathrooms']; ?></p>
<p class="product_location">Localisation : <?php echo $rows['geographic_location']; ?></p>
<p class="product_price">Prix: <?php echo $rows['price']; ?> ???</p>
</div>
</a>
</div>
</div>
<?php 
 			 }
			?> 

    
    <footer>
        <div class="footer-bar">
            <img class="logo1" src="https://img.search.brave.com/2hhYkQAB9JD94-wgYNxeVtBeKQBJc_zAFTjP4_QYbXs/rs:fit:1000:409:1/g:ce/aHR0cHM6Ly9sb2dv/bm9pZC5jb20vaW1h/Z2VzL3ZpdHRlbC1s/b2dvLnBuZw" alt="">
        <a href="https://www.youtube.com"><h3 class="text-bar">CGV</h3></a>
        <a href="https://www.youtube.com"><h3 class="text-bar">Mentions l??gales</h3></a>
        <a href="https://www.youtube.com"><h3 class="text-bar">Mail</h3></a>

        </div>
    </footer>

</body>

</html>