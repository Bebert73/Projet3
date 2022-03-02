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

        include_once '../config_php/Database.php'; 
        $database = new Database();
        $db = $database->getConnection();


        // Save in Pic 
        $countfiles = count($_FILES['img']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['img']['name'][$i];
            $image[$i+1]=$filename;
            move_uploaded_file($_FILES['img']['tmp_name'][$i],'../pic/'.$filename);
        }

        

        /** on enregistre ce que l'on va exec en SQL */
        $sql="INSERT INTO accommodation (accommodation_title, description, image1,image2,image3,image4,image5, number_of_beds, number_of_bathrooms, geographic_location, price) 
        VALUES (:acc, :desc, :img_link1,:img_link2,:img_link3,:img_link4,:img_link5, :nb, :nbt, :gl, :price)";


        /** on prepare l'exec  */
            $stm = $db->prepare($sql);
            $stm->bindValue(':acc', $this->acco ); /** on dit que :acc = $this->acco */
            $stm->bindValue(':desc', $this->desc );
            $stm->bindValue(':nb', $this->nb );
            $stm->bindValue(':nbt', $this->nbt );
            $stm->bindValue(':gl', $this->gl );
            $stm->bindValue(':price', $this->price );
            for ($i=1;$i<$countfiles+1;$i++){
                $stm->bindParam(':img_link'.$i,$image[$i]);
              }
            $stm->execute(); /** on exec la fonction */

                     
		 if($stm)
		 {
            header('Location: ../form_add.php');
        } else {
			 echo($stm);
		 }
    

        } 

        

    }
