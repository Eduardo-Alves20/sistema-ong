<?php 

include_once('config.php');
  $matricularesponsavel = $_GET['matricula_responsavel'];
  $sqldelete =  " DELETE FROM responsavel where matricula_responsavel=$matricularesponsavel";
  $resultdelete = mysqli_query($conexao, $sqldelete);
  if (mysqli_query($conexao, $sqldelete)) {
    echo "deletou com sucesso";
  } else {
    echo "nao apagou: " . mysqli_error($conexao);
  } 

header('location:home.php');
?>


