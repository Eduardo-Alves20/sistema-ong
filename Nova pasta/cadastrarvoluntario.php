<?php

include_once('config.php');

mysqli_select_db($conexao,  "ongsuper");

if($conexao->connect_errno){
    echo "falha ao conectar (" . $mysqli->connect_errno .") " .$mysqli->connect_errno ;
}else
    echo "conectado com  sucesso ";


$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$matricularesponsavel = $_POST["matricula_responsavel"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$nascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];





$inserir = " INSERT INTO responsavel (nome, sobrenome, cpf, nascimento, telefone, email, senha, profissao, salario, sexo, cep, estado, cidade, matricula_responsavel)
VALUES('$nome' , '$sobrenome' , '$cpf' , '$nascimento' , '$telefone' , '$email' , '$senha', '$profissao' , '$salario' , '$sexo' , '$cep' , '$estado' , '$cidade' ,  '$matricularesponsavel'  )";


$inserindo = mysqli_query($conexao, $inserir);
mysqli_close($conexao);
header('Location: login.html');
?>
