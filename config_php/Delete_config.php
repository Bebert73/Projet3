<?php 

class Delete{


    public function deleteacco(){
        include_once '../config_php/Database.php'; 
        $database = new Database();
        $db = $database->getConnection();

        $query = $db->prepare('DELETE FROM accommodation WHERE id=:id LIMIT 1');
        $query->bindvalue(':id', $_GET['acco'], PDO::PARAM_INT);

        $query->execute();

    }




}


?>