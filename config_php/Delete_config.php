<?php 

class Delete{


    public function deleteacco(){
        include_once './add_php/connexion.php';

        $query = $db->prepare('DELETE FROM accommodation WHERE id=:id LIMIT 1');
        $query->bindvalue(':id', $_GET['acco'], PDO::PARAM_INT);

        $query->execute();

    }




}


?>