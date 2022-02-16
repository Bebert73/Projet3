<?php
include_once './php/Database.php';
include_once './php/add_hebergement.php';
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
            
            <div class="formulairelarge">
	<a href="./admin.php">ADMIN FORM</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="./php/add_hebergement.php" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Titre</td>
				<td><input type="text" name="acc"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr> 
				<td>Nbr lits</td>
				<td><input type="number" name="nb"></td>
			</tr>
			<tr> 
				<td>Nbr douches</td>
				<td><input type="number" name="nbt"></td>
			</tr>
			<tr> 
				<td>Localisation</td>
				<td><input type="text" name="gl"></td>
			</tr>
			<tr> 
				<td>Prix</td>
				<td><input type="number" name="price"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>


	



			<?php 
			if ($result->rowCount() > 0){
			?> 
			<table algin="center" border="1px" style="width:600px"; line-height:40px;> 
				<tr>
					<th colspan="8"><h2> Gite enregister </h2> </th>
			</tr>
					<t>
					<th> ID </th>
					<th> Titre </th>
					<th> Description </th>
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
			<td> <?php echo $rows['number_of_beds']; ?> </td> 
			<td> <?php echo $rows['number_of_bathrooms']; ?> </td> 
			<td> <?php echo $rows['geographic_location']; ?> </td> 
			<td> <?php echo $rows['price']; ?> </td> 
			<td><a class="suppr" href="form_add.php?supprimer_tache=<?php echo $taches['id'] ?>"> X</a></td>
			</tr>.
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
