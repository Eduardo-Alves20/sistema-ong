<?php 
session_start();
include_once('config.php');




   





    
  

$sql = " SELECT * FROM responsavel ORDER BY nome DESC";

$result = $conexao->query($sql);


?>