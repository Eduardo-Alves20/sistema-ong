<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Document</title>
</head>
<body>
<div class="box">
        <form action="cadastravoluntario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Voluntarios</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
                    <label for="sobrenome" class="labelInput">Sobrenome</label>
                </div> 

                <br>

                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="data_nascimento" id="data_nascimento" class="inputUser" required >
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
                    <label for="senha" class="labelInput">senha</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="profissao" id="profissao" class="inputUser" required>
                    <label for="profissao" class="labelInput">profissâo</label>
                </div> 
                
                <br>

                <div class="inputBox">
                    <input type="text" name="salario" id="salario" class="inputUser" required>
                    <label for="salario" class="labelInput">salario</label>
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
                    <input type="text" name="cidade" id="cidade" class="inputUser" required >
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required >
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <br>

                <div class="inputBox">
                    <input type="text" name="matricula_responsavel" id="matricula_responsavel" class="inputUser" required>
                    <label for="matricula_responsavel" class="labelInput">matricula do voluntario</label>
                </div> 
                
                <br><br>
                
                <input type="submit" name="cadastraradm" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>