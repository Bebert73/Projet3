<?php

class Categorie {

    protected $name;



    public function __construct($name){
        $this->name = $name;
      
    }


    /** fonction Insertdata pour tout simplement inserer des données dans la base SQL */
    public function insertData(){
        include_once 'database.php'; /** on a besoin de se connecter a la BDD */
        $database = new Database();
        $db = $database->getConnection();

        $sql="INSERT INTO category (name) 
        VALUES (:name)";

        /** on prepare l'exec  */
            $stm = $db->prepare($sql);
            $stm->bindValue(':name', $this->name ); /** on dit que :acc = $this->acco */

            $stm->execute(); /** on exec la fonction */
        } 
    }

?> 