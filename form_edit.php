<?php
include_once 'config_php/Database.php';
$database = new Database();
$db = $database->getConnection();
$id = $_GET['update'];
$sql = "SELECT * FROM accommodation WHERE id = $id ";
$result = $db->query($sql);


while($rows = $result->fetch(PDO::FETCH_ASSOC)) {
?>


<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
	<title>Ajouter Gite</title>
</head>

<body class="body-hebergement" >
<main>
        <div class="containerlarge">
        
	<div class="formulairelarge">
	<a class="retour" href="./admin.php">Retour</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="./add_php/edit_hebergement.php" method="post" name="form1" >
		<table class="table-form">

		<input type="hidden" name="accoid" value="<?php echo $rows['id']; ?>">
			<tr> 
				<td class="form-text" >Titre</td>
				<td><input type="text" name="acc" value="<?php echo $rows['accommodation_title']; ?>"></td>
			</tr>
			<tr> 
				<td class="form-text" >Description</td>
				<td><input type="text" name="desc" value="<?php echo $rows['description']; ?>"></td>
			</tr>
			<tr> 
				<td class="form-text">lits</td>
				<td><input type="number" name="nb" min="0" value="<?php echo $rows['number_of_beds']; ?>"></td>
			</tr>
			<tr> 
				<td class="form-text">douches</td>
				<td><input type="number" name="nbt" min="0" value="<?php echo $rows['number_of_bathrooms']; ?>"> </td>
			</tr>
			<tr> 
				<td class="form-text">Localisation</td>
				<td><input type="text" name="gl" value="<?php echo $rows['geographic_location']; ?>"></td>
			</tr>
			<tr> 
				<td class="form-text">Prix</td>
				<td><input type="number" name="price" min="0" value="<?php echo $rows['price']; ?>"></td>
			</tr>
				<td></td>
				<td><button type="Submit" name="update-data">Edit </button></td>
						</tr>

		<?php 
 			 }
			echo "</table>";
			
			?> 

</div>
</div>

</body>
</html> 
<!-- form -->
