<?php
if(isset($_POST['Submit'])){ /** si submit est rempli alors  */
    require_once("Categorie.php"); /** on a besoin de add_config.php  */
    $sc = new Categorie($_POST['name']);
    $sc->insertData(); /** on crée un nouveau objet signupConfig et on start la fonction insertData  */
}


?>