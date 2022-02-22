<!-- Template  --><?php 
include_once '../config_php/Database.php';
$database = new Database();
$db = $database->getConnection();

$id = $_GET['acco'];
$sql = "SELECT * FROM accommodation WHERE id = $id ";
$result = $db->query($sql);

$sqls = "SELECT image FROM accommodation WHERE id = $id";
$results = $db->query($sqls);

?> 


<!DOCTYPE html>
<html lang="fr">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>fiche_product</title>
</head>


<body class="fiche_product">
    <header class="nav-bar">
        <nav>
            <a class="menu" href="../index.php">Accueil</a>
            <a class="menu" href="../accommodation.php">Hebergements</a>
            <a class="menu" href="../contact.php">Contactez-nous</a>
            <a class="menu" href="../about.php">A-propos</a>
        </nav>
    </header>

    <?php
while($acco = $result->fetch(PDO::FETCH_ASSOC)) {

	?>

    <main>
        <div class="fiche_product1">
            <h1 class="product_title1"> <?php echo $acco['accommodation_title'] ?>  </h1>
            <div id="slider">
            <?php
                while($img = $results->fetch(PDO::FETCH_ASSOC)) {
                    	?>
<div id="slider">
<figure>
<img src="../pic/<?php echo $img['image']?>">
</figure>
</div>
                            <?php
                            } 
                            ?>
                        </ul>
            </div>

            
            <p class="product_nbr_beds1">Nombre de lit : <?php echo $acco['number_of_beds'] ?> </p>
            <p class="product_nbr_bath1">Nombre de salles de bains : <?php echo $acco['number_of_bathrooms'] ?> </p>
            <p class="product_price1">prix : <?php echo $acco['price'] ?></p>
            <p class="product_desc1"><?php echo $acco['description'] ?></p>
            <p class="product_location1">Location : <?php echo $acco['geographic_location'] ?> </p>
            <a class="product_btn" href=""><button> Reserver </button></a>

        </div>
    </main>
<?php

}

?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="../JS/main.js"></script>
</body>
</html>