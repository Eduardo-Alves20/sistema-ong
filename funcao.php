<?php 
include_once('config.php');
session_start();
$id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a opção foi enviada
    if (isset($_POST['opcao'])) {
        session_start();
        $opcao = $_POST['opcao'];

        // Realiza o redirecionamento com base na opção escolhida
        switch ($opcao) {
            case 'link1':
                $_SESSION['funcao'] = 'voluntario';
                $_SESSION['coluna'] = 'cpf';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'cpf';
                    header('location:home.php');
                }
                     else {
                        header('location:login.php');
                     }
                exit();
            case 'link2':
                $_SESSION['funcao'] = 'medico';
                $_SESSION['coluna'] = 'crm_medico';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'crm_medico';
                    header('location:home.php');
                }
                     else {
                        header('location:login.php');
                     }
                exit();
            case 'link3':
                $_SESSION['funcao'] = 'dentista';
                $_SESSION['coluna'] = 'crd';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'crd';
                    header('location:home.php');
                }
                  
                     else {
                        header('location:login.php');
                     }
               
                
                exit();
            case 'link4':
                $_SESSION['funcao'] = 'psicologo';
                $_SESSION['coluna'] = 'crp';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'crp';
                    header('location:home.php');
                }
                  
                     else {
                        header('location:login.php');
                     }
                exit();
            case 'link5':
                $_SESSION['funcao'] = 'musico';
                $_SESSION['coluna'] = 'cpf';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'cpf';
                    header('location:home.php');
                }
                  
                     else {
                        header('location:login.php');
                     }
                exit();  
            case 'link6':
                $_SESSION['funcao'] = 'admin';
                $_SESSION['coluna'] = 'cpf';
                $funcao = $_SESSION['funcao'];
                $coluna = $_SESSION['coluna'];
                $sql = "SELECT * FROM $funcao WHERE $coluna = '$id'";
                $resultado = mysqli_query($conexao, $sql);
                if(mysqli_num_rows($resultado) == 1 ){
                    $_SESSION['coluna'] = 'crd';
                    header('location:home.php');
                }
                  
                     else {
                        header('location:login.php');
                     }
                exit();  
            

            default:
                echo 'Opção inválida';
        }
    } else {
        echo 'Opção não especificada';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Document</title>

    <style>
        .box{
            display: flex;
            align-items: center;
            text-align: center;
        }
        .box{
            display: flex;
   align-items: center;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   background-color: rgba(0, 0, 0, 0.6);
   padding: 15px;
   border-radius: 15px;
   width: 20%;
}
        .opcao{
            padding:8px;
            border-radius: 12px;
            margin: 5%;
        }
        .btn1{
            border-radius: 12px;
            background-color: blue;
            color: white;
        }
        .box1{
            display: flex;
        }
    </style>
</head>
<body>
<div class="box">

    <div class="title">
        Selecione sua profissao:
    </div>
    <div class="box1">
    <form  method="POST" action="">
    <select class="opcao" name="opcao" id="opcao">
        <option value="link1">Voluntarios </option>
        <option value="link2">Medicos</option>
        <option value="link3">Dentista</option>
        <option value="link4">psicólogo</option>
        <option value="link5">Musico</option>
        <option value="link6">Adminstrador</option>
    </select>
   
    <button class="btn1" type="submit">Selecionar</button>
    </div>

    </form>
</div>
</body>
</html>