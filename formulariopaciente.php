
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Formulário</title>
    <style>
        
        input[type=number]::-webkit-inner-spin-button { 
        -webkit-appearance: none;
        
    }
    input[type=number] { 
       -moz-appearance: textfield;
       appearance: textfield;
    
    }
        .box{
            color: white;
        position: absolute;
    
        top: 85%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 30%;
        }
        .inputUser{
            padding-top:15px ;
        }
       </style>
</head>
<body>
    
    <div class="box">
        <form action="cadastrarpaciente.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Paciente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br>
                
                <div class="inputBox">
                    <input type="number" name="cpf" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">CPF</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="plano" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Plano de saúde</label>
                </div> 
                <br>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" >
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="telefone" id="telefone" class="inputUser" >
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="sexo" id="telefone" class="inputUser" >
                    <label for="telefone" class="labelInput">Sexo</label>
                </div><br>
                <div class="inputBox">
                    <input type="date" name="data_nascimento" id="cidade" class="inputUser" >
                    <label for="cidade" class="labelInput">Data de Nascimento</label>
                </div> <br>
                <div class="inputBox">
                    <input type="number" name="cep" id="cidade" class="inputUser" >
                    <label for="cidade" class="labelInput">Cep</label>
                </div> <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" >
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" >
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" >
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
              
                <br><br>
                
                <input type="submit" name="cadastrarpaciente" id="submit-cadastrar">
            </fieldset>
        </form>
    </div>
</body>
</html>