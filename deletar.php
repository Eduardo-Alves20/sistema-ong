<?php 

include_once('config.php');
  $matricula_paciente = $_GET['matricula_paciente'];
  $sqldelete =  " DELETE FROM paciente where matricula_paciente=$matricula_paciente";
  $resultdelete = mysqli_query($conexao, $sqldelete);
  if (mysqli_query($conexao, $sqldelete)) {
    echo "deletou com sucesso";
  } else {
    echo "nao apagou: " . mysqli_error($conexao);
  } 

header('location:home.php');
?>


