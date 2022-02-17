<?php 
require_once("../config_php/Delete_config.php"); /** on a besoin de add_config.php  */
$delete = new Delete($_GET['acco']);
$delete->deleteacco();
?>