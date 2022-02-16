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
	<link rel="stylesheet" href="css/styles.css">
	<title>Ajouter Gite</title>
</head>

<main>

<body class="form_add">
	<a href="./admin.php">Home</a>
	<br/><br/>
	<div class="containeradmin">
		<div class="formulaireadmin">
	 <form action="./php/add_hebergement.php" method="post" name="form1" >
		<table>
			<tr> 
				<td>Titre du gite</td>
				<td><input type="text" name="acc" class="input-form"></td>
			</tr>
			<tr> 
				<td>description</td>
				<td><input type="text" name="desc" class="input-form"></td>
			</tr>
			<tr> 
				<td>nombres de lits</td>
				<td><input type="number" name="nb" class="input-form"></td>
			</tr>
			<tr> 
				<td>nombres de douches</td>
				<td><input type="number" name="nbt" class="input-form"></td>
			</tr>
			<tr> 
				<td>localisation</td>
				<td><input type="text" name="gl" class="input-form"></td>
			</tr>
			<tr> 
				<td>prix</td>
				<td><input type="number" name="price" class="input-form"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter" class="input-form"> </td>
			</tr>
		</table>
	</form>
	 </div>
	 </main>
<?php 
if ($result->rowCount() > 0){
?> 
<div class="tableau">
<table> 
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
</div>

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
</tr>
<?php 
  }
  echo "</table>";
} else {
  echo "0 results";
}


?> 
</form>
</body>
</html> 
