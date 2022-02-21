<?php
if(isset($_POST['Edit'])){ /** si submit est rempli alors  */
    echo 'salut';
    require_once("../config_php/Edit.php"); /** on a besoin de add_config.php  */
    $sc = new EditHeberg($_POST['acc'],$_POST['desc'], $_POST['nb'],$_POST['nbt'],$_POST['gl'],$_POST['price'], $_GET['edit']);
    $sc->editData(); /** on crée un nouveau objet signupConfig et on start la fonction insertData  */
}
?>