<?php
include_once './config_php/Database.php';
include_once './add_php/add_hebergement.php';
$database = new Database();
$db = $database->getConnection();

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

<body>
<main>
        <div class="containerlarge">
            
	<a href="./admin.php">ADMIN FORM</a>
	<div class="formulairelarge">
	<br/><br/>
	<div id="msg"></div>
	<form action="./add_php/add_hebergement.php" method="post" enctype="multipart/form-data" name="form1" >
		<table class="table-form">
			<tr> 
				<td class="form-text" >Titre</td>
				<td><input type="text" name="acc"></td>
			</tr>
			<tr> 
				<td class="form-text" >Description</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr> 
				<td class="form-text" >Image</td>
				<td><input type="file" name="img"></td>
			</tr>

			<tr> 
				<td class="form-text">lits</td>
				<td><input type="number" name="nb" min="0"></td>
			</tr>
			<tr> 
				<td class="form-text">douches</td>
				<td><input type="number" name="nbt" min="0"> </td>
			</tr>
			<tr> 
				<td class="form-text">Localisation</td>
				<td><input type="text" name="gl"></td>
			</tr>
			<tr> 
				<td class="form-text">Prix</td>
				<td><input type="number" name="price" min="0"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>


	



			<?php 
			if ($result->rowCount() > 0){
			?> 
			<table > 
				<tr>
					<th colspan="8"><h2> Gite enregister </h2> </th>
			</tr>
					<t>
					<th> ID </th>
					<th> Titre </th>
					<th> Description </th>
					<th> image </th>
					<th> Lits </th>
					<th> salle de bains </th>
					<th> localisation </th>
					<th> prix </th>
					<th> delete </th>

			</t>
			<?php
			while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

				?>
				
				<form action="" name="form2">
			<tr>
			<td> <?php echo $rows['id']; ?> </td> 
			<td> <?php echo $rows['accommodation_title']; ?> </td> 
			<td> <?php echo $rows['description']; ?> </td> 
			<td> <?php echo $rows['image']; ?> </td> 
			<td> <?php echo $rows['number_of_beds']; ?> </td> 
			<td> <?php echo $rows['number_of_bathrooms']; ?> </td> 
			<td> <?php echo $rows['geographic_location']; ?> </td> 
			<td> <?php echo $rows['price']; ?> </td> 
			<td><a class="sup"  href="./add_php/delete.php?acco=<?php echo $rows['id'] ?>">x</a></td>
			</tr>
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