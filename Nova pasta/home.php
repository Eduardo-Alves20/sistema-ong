<?php 
include_once('config.php');
include_once('testelogin.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
       body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }


    </style>
</head>
<body>

 <?php echo "<h1>bem vindo  $matricula_responsavel </h1> "?> 

<div class=" m-5 ">
<table class = "table text-white table-bg">

  <thead>
    <tr>
     <th scope="col">matricula_responsavel</th>
      <th scope="col">nome</th>
      <th scope="col">sobrenome</th>
      <th scope="col">cpf</th>
      <th scope="col">data de nascimento </th>
      <th scope="col">sexo</th>
      <th scope="col">cep</th>
      <th scope="col">estado</th>
      <th scope="col">cidade</th>
      <th scope="col">telefone</th>
      <th scope="col">email</th>
      <th scope="col"><i class="bi bi-pencil-fill"></i></th>
      

    </tr>
  </thead>

  <tbody>
    <?php 
    // Consulta para obter pacientes associados ao cliente

    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" .$user_data['matricula_responsavel']. "</td>";
        echo "<td>" .$user_data['nome']. "</td>";
        echo "<td>" .$user_data['sobrenome']. "</td>";
        echo "<td>" .$user_data['cpf']. "</td>";
        echo "<td>" .$user_data['nascimento']. "</td>";
        echo "<td>" .$user_data['sexo']. "</td>";
        echo "<td>" .$user_data['cep']. "</td>";
        echo "<td>" .$user_data['estado']. "</td>";
        echo "<td>" .$user_data['cidade']. "</td>";
        echo "<td>" .$user_data['telefone']. "</td>";
        echo "<td>" .$user_data['email']. "</td>";
        echo "<td>  <a href='editar.php?matricula_responsavel=$user_data[matricula_responsavel]' class = 'btn btn-sm btn-primary' > <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
        </svg></a> 
        <a href='deletar.php?matricula_responsavel=$user_data[matricula_responsavel]' class = 'btn btn-sm btn-danger mt-2' > <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
      </svg></a>
         </td>";
        echo "</tr>";

        
    }
    
    ?>

  </tbody>

</table>
</div>







     <a href= "cadastrarvoluntario.php" ><input  type="button" value="cadastrar voluntario"></a>
    <input type="button" value="visualizar paciente">

    <a href="sair.php"> <input type="button" value=" sair"> </a>
</form>
    
</body>
</html>