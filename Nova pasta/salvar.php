<?php 


include_once('config.php');


    $nome = filter_input(INPUT_POST, 'nome',);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome',);
    $cpf = filter_input(INPUT_POST, 'cpf',);
    $profissao = filter_input(INPUT_POST, 'profissao',);
    $salario = filter_input(INPUT_POST, 'salario',);
    $email = filter_input(INPUT_POST, 'email',);
    $senha = filter_input(INPUT_POST, 'senha',);
    $telefone = filter_input(INPUT_POST, 'telefone',);
    $sexo = filter_input(INPUT_POST, 'sexo',);
    $nascimento = filter_input(INPUT_POST, 'nascimento',);
    $cep = filter_input(INPUT_POST, 'cep',);
    $cidade = filter_input(INPUT_POST, 'cidade',);
    $estado =filter_input(INPUT_POST, 'estado',);
    $matricularesponsavel = filter_input(INPUT_POST, 'matricula_responsavel',);
    echo $nome;
    echo $sobrenome;
    echo $cpf;
    
echo $matricularesponsavel;

    $sqlupdate = "UPDATE responsavel SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', profissao='$profissao', salario='$salario', 
    email='$email', senha='$senha', telefone='$telefone', sexo='$sexo', nascimento='$nascimento', cep='$cep', cidade='$cidade', estado='$estado' WHERE matricula_responsavel='matricularesponsavel'";

    $result = mysqli_query($conexao,$sqlupdate);

    
    if (mysqli_query($conexao, $sqlupdate)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conexao);
      }
      




echo $nome;

header('location:home.php');

?>