<?php

include_once('config.php');
if(isset($_POST['submit-cadastrar']));
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$nascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$funcao = $_POST["funcao"];





$inserirdados = " INSERT INTO voluntario (nome,  cpf, nascimento, telefone, sexo, cep, endereco, estado, cidade, funcao )
VALUES('$nome' , '$cpf' , '$nascimento' , '$telefone' , '$sexo' , '$cep' , '$endereco', '$estado' , '$cidade' ,'$funcao')";
$inserindo = mysqli_query($conexao, $inserirdados);

$inserirlogin = "INSERT INTO usuario (email, senha, id) values ('$email' , '$senha', '$cpf')";


$inserindo = mysqli_query($conexao, $inserirlogin);

header('location: home.php');



?>