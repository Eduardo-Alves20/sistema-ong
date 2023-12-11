<?php

include_once('config.php');
if(isset($_POST['submit-cadastrar']));
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$nascimento = $_POST["data_nascimento"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$matricularesponsavel = $_POST["matricula_responsavel"];





$inserir = " INSERT INTO responsavel (nome, sobrenome, cpf, nascimento, telefone, email, senha, profissao, salario, sexo, cep, estado, cidade, matricula_responsavel)
VALUES('$nome' , '$sobrenome' , '$cpf' , '$nascimento' , '$telefone' , '$email' , '$senha', '$profissao' , '$salario' , '$sexo' , '$cep' , '$estado' , '$cidade' ,  '$matricularesponsavel'  )";


$inserindo = mysqli_query($conexao, $inserir);

header('location: home.php');




?>