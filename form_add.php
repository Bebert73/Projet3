<?php

include_once './config_php/Database.php';
$database = new Database();
$db = $database->getConnection();

include_once './add_php/add_hebergement.php';

$sql = "SELECT * FROM accommodation";
$result = $db->query($sql);
?>


<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
	<title>Ajouter Gite</title>
</head>

<body class="body-hebergement">
<main>
        <div class="containerlarge">

        
	<div class="formulairelarge">
	<a class="retour" href="./admin.php">Retour</a>
	<br/><br/>
	<form action="./add_php/add_hebergement.php" method="post" enctype="multipart/form-data" name="form1" >
		

	<table class="table-form">
			<tr> 
				<td class="form-text" >Titre</td>
				<td><input  class="input-form" type="text" name="acc" required></td>
			</tr>
			<tr> 
				<td class="form-text" >Description</td>
				<td><input class="input-form" type="text" name="desc" required></td>
			</tr>
			<tr> 
				<td class="form-text" >Image</td>
				<td><input class="input-form" type="file" accept = "image/jpg,image/jpeg,image/gif,image/png" name="img[]" id="img" multiple required></td>
			</tr>

			<tr> 
				<td class="form-text">lits</td>
				<td><input class="input-form" type="number" name="nb" min="0" required></td>
			</tr>
			<tr> 
				<td class="form-text">douches</td>
				<td><input class="input-form" type="number" name="nbt" min="0" required> </td>
			</tr>
			<tr> 
				<td class="form-text">Localisation</td>
				<td><input class="input-form" type="text" name="gl" required></td>
			</tr>
			<tr> 
				<td class="form-text">Prix</td>
				<td><input class="input-form" type="number" name="price" min="0" required></td>
			</tr>
				</table>
				<td><input class="button-form" type="submit" name="Submit" value="Ajouter"></td>

	</form>


	



			<?php 
			if ($result->rowCount() > 0){
			?> 
				<div class="tableau-add">
			<table class="table-add"> 
				<tr class="tr-add">
					<th class="th-add"> ID </th>
					<th class="th-add"> Titre </th>
					<th class="th-add"> Description </th>
					<th class="th-add"> image </th>
					<th class="th-add"> Lits </th>
					<th class="th-add">Douche</th>
					<th class="th-add">Lieux</th>
					<th class="th-add"> prix </th>
					<th class="th-add">Edit</th>
					<th class="th-add" 	>  delete </th>
					</tr>
			<?php
			while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

				?>
				
				<form action="" name="form2">
			<tr class="tr-add">
			<td class="td-add"> <?php echo $rows['id']; ?> </td> 
			<td class="td-add"> <?php echo $rows['accommodation_title']; ?> </td> 
			<td class="td-add-desc"> <?php echo $rows['description']; ?> </td> 
			<td class="td-add"> <img class="zoom-img" style="width:100%" src="./pic/<?php echo $rows['image1']; ?>" alt=""> </td> 
			<td class="td-add"> <?php echo $rows['number_of_beds']; ?> </td> 
			<td class="td-add"> <?php echo $rows['number_of_bathrooms']; ?> </td> 
			<td class="td-add"> <?php echo $rows['geographic_location']; ?> </td> 
			<td class="td-add"> <?php echo $rows['price']; ?> </td> 
			<td class="td-add"><a class="edit"  href="./form_edit.php?update=<?php echo $rows['id'] ?>">📥</a></td>
			<td class="td-add"><a class="sup"  href="./add_php/delete.php?acco=<?php echo $rows['id'] ?>">❌</a></td>
			</tr>
			</div> 
			<?php 
 			 }
			echo "</table>";
			} else {
			echo "0 results";
			}
			?> 
</form>

</div>
</div>

</body>
</html> 
<!-- form -->