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
    <form  method="post" action="processar_opcao.php">
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


<!--
    <!--<form  method="post" action="processar_opcao.php">
    <div class="title ">
    <label class="title-1" for="opcao" >Escolha uma opção:</label>
    </div>
    <div>
<select name="opcao" id="opcao">
        <option value="link1">Voluntarios </option>
        <option value="link2">Medicos</option>
        <option value="link3">Dentista</option>
        <option value="link4">psicólogo</option>
        <option value="link5">Musico</option>
        <option value="link6">Adminstrador</option>
    </select>
    </div>
    
    <button type="submit">Ir para o link selecionado</button>

    </div> -->



