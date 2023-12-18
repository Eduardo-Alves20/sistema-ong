<?php

include_once('config.php');
if(isset($_POST['cadastrarmusico']));
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$nascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];






$inserirdados = " INSERT INTO musico (nome,  cpf, nascimento, telefone, sexo, cep, endereco, estado, cidade )
VALUES('$nome' , '$cpf' , '$nascimento' , '$telefone' , '$sexo' , '$cep' , '$endereco', '$estado' , '$cidade')";

$inserirlogin = "INSERT INTO usuario (email, senha, id) values ('$email' , '$senha', '$cpf')";
$inserindo = mysqli_query($conexao, $inserirdados);
$inserindo = mysqli_query($conexao, $inserirlogin);

header('location: home.php');




?>