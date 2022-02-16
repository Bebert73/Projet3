<?php

class Hebergement {

    /** on enregistre les valeurs que l'on a besoin - 
     * Elle sont en protected donc on peut les utiliser dans une fonction */
    protected $acco;
    protected $desc;
    protected $nb;
    protected $nbt;
    protected $gl;
    protected $price;



/** on defini chaque variable a un $this->valeur 
 * pour pouvoir les redéclarer dans la class */
    public function __construct($acco, $desc, $nb, $nbt, $gl, $price){
        $this->acco = $acco;
        $this->desc = $desc;
        $this->nb = $nb;
        $this->nbt = $nbt;
        $this->gl = $gl;
        $this->price= $price;

        
      
    }


    /** fonction Insertdata pour tout simplement inserer des données dans la base SQL */
    public function insertData(){
        include_once 'database.php'; /** on a besoin de se connecter a la BDD */
        $database = new Database();
        $db = $database->getConnection();


        /** on enregistre ce que l'on va exec en SQL */
        $sql="INSERT INTO accommodation (accommodation_title, description, number_of_beds, number_of_bathrooms, geographic_location, price) 
        VALUES (:acc, :desc, :nb, :nbt, :gl, :price)";

        /** on prepare l'exec  */
            $stm = $db->prepare($sql);
            $stm->bindValue(':acc', $this->acco ); /** on dit que :acc = $this->acco */
            $stm->bindValue(':desc', $this->desc );
            $stm->bindValue(':nb', $this->nb );
            $stm->bindValue(':nbt', $this->nbt );
            $stm->bindValue(':gl', $this->gl );
            $stm->bindValue(':price', $this->price );

            $stm->execute(); /** on exec la fonction */
        } 


    }

?> 