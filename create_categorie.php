<?php
include_once './add_php/connexion.php';
include_once './add_php/add_categorie.php';

$sql = "SELECT * FROM category";
$result = $db->query($sql);
?>


<html>
<head>
	<title>Ajouter Gite</title>
</head>

<body>
	<a href="./admin.php">Home</a>
	<br/><br/>
	<div id="msg"></div>
	<form action="./add_php/add_categorie.php" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>


	<?php 
if ($result->rowCount() > 0){
?> 
<table> 
	<tr>
		<th colspan="8"><h2> Categorie enregister </h2> </th>
</tr>
		<t>
		<th> ID </th>
		<th> Name </th>

</t>


<?php
while($acco = $result->fetch(PDO::FETCH_ASSOC)) {

	?>
	
	<form action="" name="form2">
<tr>
<td> <?php echo $acco['id']; ?> </td> 
<td> <?php echo $acco['name']; ?> </td> 
</tr>
<?php 
  }
  echo "</table>";
} else {
  echo "0 results";
}


?> 


</html>

