<?php
 include_once '../config_php/Database.php';
 $database = new Database();
 $db = $database->getConnection();

$sql = "SELECT * FROM accommodation LIMIT 1";
$result = $db->prepare($sql);
 
 if(isset($_POST['update-data'])){
	 $accoid = $_POST['accoid'];
	 $title = $_POST['acc'];
	 $description = $_POST['desc'];
	 $bed = $_POST['nb'];
	 $bath = $_POST['nbt'];
	 $geoloc = $_POST['gl'];
	 $price = $_POST['price'];
 
	 try {
		 $query = "UPDATE accommodation SET accommodation_title=:title, description=:description, number_of_beds=:bed, number_of_bathrooms=:bath, geographic_location=:geoloc , price=:price WHERE id = :accoid LIMIT 1 ";
		 $statement = $db->prepare($query);
 
		 $data = [
			 ':title' => $title,
			 ':description' => $description,
			 ':bed' => $bed,
			 ':bath' => $bath,
			 ':geoloc' => $geoloc,
			 ':price' => $price,
			 ':accoid' => $accoid,
 
		 ];
		 $query_execute = $statement->execute($data);
 
 
		 if($query_execute)
		 {
			header('Location: ../form_add.php');
		} else {
			 echo($query);
		 }
 
	 } catch (PDOException $e){
		 echo $e->getMessage();
	 }
	 
 
 }


?>
<form action="../add_php/show.php?show=<?php echo $rows['id'] ?>">
	<button type="submit" name="send" value="Go" >Page </button>
	</form>
