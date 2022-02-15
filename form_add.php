<?php
include_once './php/Database.php';
include_once './php/add_hebergement.php';
$database = new Database();
$db = $database->getConnection();

$sql = "SELECT * FROM accommodation";
$result = $db->query($sql);

}
?>


<html>
<head>
	<title>Ajouter Gite</title>
</head>

<body>
	<a href="./admin.php">Home</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="./php/add_hebergement.php" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Titre du gite</td>
				<td><input type="text" name="acc"></td>
			</tr>
			<tr> 
				<td>description</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr> 
				<td>nombres de lits</td>
				<td><input type="number" name="nb"></td>
			</tr>
			<tr> 
				<td>nombres de douches</td>
				<td><input type="number" name="nbt"></td>
			</tr>
			<tr> 
				<td>localisation</td>
				<td><input type="text" name="gl"></td>
			</tr>
			<tr> 
				<td>prix</td>
				<td><input type="number" name="price"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>


	<html>
		<title> 
			<head> Gite </head>
</title>
<body>
<!-- hey -->

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
