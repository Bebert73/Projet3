<?php
include_once './config_php/Database.php';
$database = new Database();
$db = $database->getConnection();
$sql = "SELECT * FROM accommodation";
$result = $db->query($sql);


?> 

<!DOCTYPE html>

<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Le Bon Gite</title>
</head>


<body class="body-hebergement">

<header>
        <nav>
            <a class="menu" href="index.php">Accueil</a>
            <a class="menu" href="accommodation.php">Hebergement</a>
            <a class="menu" href="contact.php">Contactez-nous</a>
            <a class="menu" href="about.php">A-propos</a>
        </nav>
    </header>
    <?php
			while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

				?>

<div class="container_product">
<p class="product_img"><img src="./pic/<?php echo $rows['image']; ?> " alt="" width="270px" height="220px"></p>
<h1 class="product_title"><?php echo $rows['accommodation_title']; ?></h1>
<p class="product_desc"><?php echo $rows['description']; ?></p>
<p class="product_nbr_beds">Nombre de lit: <?php echo $rows['number_of_beds']; ?></p>
<p class="product_nbr_bath">Nombre de salle de bain: <?php echo $rows['number_of_bathrooms']; ?></p>
<p class="product_location">Localisation : <?php echo $rows['geographic_location']; ?></p>
<p class="product_price">Prix: <?php echo $rows['price']; ?> €</p>
</div>

<?php 
 			 }
			?> 

    <footer>
        <div class="footbar">
        </div>
    </footer>

</body>

</html>