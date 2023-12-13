<?php 


include_once('config.php');
 if(isset($_POST['enviar']))
 {
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $nascimento = $_POST['nascimento'];
  $cep = $_POST['cep'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $matricula_paciente = $_POST['matricula_paciente'];
 }

    
    


    $sqlupdate = "UPDATE paciente SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', email='$email', telefone='$telefone', sexo='$sexo', nascimento='$nascimento', cep='$cep', cidade='$cidade', estado='$estado' WHERE matricula_paciente='matricula_paciente'";

    $result = mysqli_query($conexao,$sqlupdate);

    $dados = mysqli_fetch_array($result);
    $nome1 = $dados['nome'];
    if (mysqli_query($conexao, $sqlupdate)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conexao);
      }
      




echo $nome1;





?>