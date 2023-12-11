
<?php


 include_once('config.php');
 include_once('teste.php');


if(!empty($_GET['matricula_responsavel']))
{
    $matricularesponsavel = $_GET['matricula_responsavel'];
    $sqlselect = "SELECT * FROM responsavel where matricula_responsavel='$matricularesponsavel'";
    $result = $conexao->query($sqlselect);
   
    if(mysqli_num_rows($result) > 0)
    {
        while($user = mysqli_fetch_assoc($result))
        
        {
            
            $nome = $user['nome'];
            $sobrenome = $user['sobrenome'];
            $cpf = $user['cpf'];
            $profissao = $user['profissao'];
            $salario = $user['salario'];
            $email = $user['email'];
            $senha = $user['senha'];
            $telefone = $user['telefone'];
            $sexo = $user['sexo'];
            $nascimento = $user['nascimento'];
            $cep = $user['cep'];
            $cidade = $user['cidade'];
            $estado = $user['estado'];
            $matricularesponsavel = $user['matricula_responsavel'];
            }
        
    }

   
}

    else
    
        header('location: home.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Formulário</title>
   
</head>
<body>
    
    <div class="box">
        <form action="salvar.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Voluntarios</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value ="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" value = "<?php  echo $sobrenome ?>" required>
                    <label for="sobrenome" class="labelInput">Sobrenome</label>
                </div> 

                <br>

                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value = "<?php  echo $cpf ?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="data_nascimento" id="data_nascimento" class="inputUser" value = "<?php  echo $nascimento ?>" required >
                    <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
                </div>

                 <br>

                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" value = "<?php  echo $telefone ?>"  required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value = "<?php  echo $email ?>" required >
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value = "<?php  echo $senha ?>" required >
                    <label for="senha" class="labelInput">senha</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="profissao" id="profissao" class="inputUser" value = "<?php  echo $profissao ?>" required>
                    <label for="profissao" class="labelInput">profissâo</label>
                </div> 
                
                <br>

                <div class="inputBox">
                    <input type="text" name="salario" id="salario" class="inputUser" value = "<?php  echo $salario ?>" required>
                    <label for="salario" class="labelInput">salario</label>
                </div> 

                <br>

                <div class="inputBox">
                    <input type="text" name="sexo" id="sexo" class="inputUser" value = "<?php  echo $sexo ?>" required >
                    <label for="sexo" class="labelInput">Sexo</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser"  value = "<?php  echo $cep ?>" required>
                    <label for="cep" class="labelInput">Cep</label>
                </div> 

                <br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value = "<?php  echo $cidade ?>" required >
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value = "<?php  echo $estado ?>" required >
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="hidden" name="matricula_responsavel" id="matricula_responsavel" value = "<?php  echo $matricularesponsavel ?>" required>
                    
                </div> 
                
                <br><br>
                
                <input type="submit" name="enviar" id="enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>


