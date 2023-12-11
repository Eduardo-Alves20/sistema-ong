<?php 
session_start();
include_once('config.php');

if(isset($_POST['submit-entrar'])):
    $erros = array();
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($email) or empty($senha))
        $erros[]= "<li> o campo login/senha precisa ser preenchido </li>";

    else
        $sql = "SELECT * FROM responsavel WHERE email = '$email' and senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $sql = "SELECT * FROM responsavel WHERE email = '$email' and senha = '$senha'";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) == 1 )
            $dados = mysqli_fetch_array($resultado);
            $_SESSION['logado'] = true; 
            $_SESSION['email'] = $dados['email'];
            $_SESSION['senha'] = $dados['senha'];
            $_SESSION['matricula_responsavel'] =$id['id'];
            header ('location: home.php');

        else:
            $erros[] = "<li>usuario ou senha nao conferem</li>";
        endif;

        else:
            

    endif;        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }





.box{
    background-color: dodgerblue;
            position: absolute;
            top: 90%;
            left: 50%;
            width: 50%;
            transform: translate(-50%,-50%);
            padding: 15px;
            border-radius: 15px;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div>
        <h1>Entre</h1>


        <?php 
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>

        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            
            <input class="inputSubmit" type="submit" name="submit-entrar" value="Entrar">
            <div class="box">   
                <a href="cadastrarvoluntario.php">Cadastre-se</a>
            </div>
        </form>
    </div>


    
</body>
</html>