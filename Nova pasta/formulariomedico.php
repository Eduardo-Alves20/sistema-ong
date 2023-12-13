<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Document</title>
</head>
<body>
<?php 
session_start();

if(!empty($_SESSION['erros'])):
    foreach($_SESSION['erros'] as $erro):
        echo $erro;
    endforeach;
endif;
?>
<div class="box">
        <form action="cadastrarmedico.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Medicos</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>

                <br>
                
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="data_nascimento" id="datanascimento" class="inputUser" required >
                    <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
                </div>

                 <br>

                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser"  required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required >
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required >
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="sexo" id="sexo" class="inputUser" required >
                    <label for="sexo" class="labelInput">Sexo</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser"  required>
                    <label for="cep" class="labelInput">Cep</label>
                </div> 

                <br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required >
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required >
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <br>
                
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required >
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="crm_medico" id="crm_medico" class="inputUser" required>
                    <label for="matricula_responsavel" class="labelInput">CRM Medico</label>
                </div> 
                
                <br><br>
                
                <input type="submit" name="cadastrarmedico" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>