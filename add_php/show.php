<!-- Template  --><?php 
include_once '../config_php/Database.php';
$database = new Database();
$db = $database->getConnection();

$id = $_GET['acco'];
$sql = "SELECT * FROM accommodation WHERE id = $id";
$result = $db->query($sql);

?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
			while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

				?>

<h1><?php echo $rows['id']; ?> </h1>


<?php
}
				?>

</body>
</html>