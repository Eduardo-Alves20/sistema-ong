<?php

$conexao = mysqli_connect("127.0.0.1","root","");

mysqli_select_db($conexao,  "ongsuper");

if($conexao->connect_errno){
    echo "falha ao conectar (" . $mysqli->connect_errno .") " .$mysqli->connect_errno ;
} 
else
echo "conectado com  sucesso ";


$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$plano = $_POST["plano"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$data_nascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];




$inserir = " INSERT INTO paciente (nome, sobrenome, cpf, nascimento, sexo, cep, estado, cidade, telefone, email, plano)
VALUES('$nome','$sobrenome','$cpf', '$data_nascimento', '$sexo', '$cep', '$estado', '$cidade', '$telefone', '$email', '$plano'  )";
$inserindo = mysqli_query($conexao, $inserir);
mysqli_close($conexao);
header('Location: index.html');
?>
