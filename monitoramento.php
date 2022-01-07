<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome_atividade = $_POST['nome'];
        $data_inicio = $_POST['data_inicio'];
        $hora_inicio = $_POST['hora_inicio'];
        $data_fim = $_POST['data_fim'];
        $hora_fim = $_POST['hora_fim'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_atividade,data_inicio,hora_inicio,data_fim,hora_fim) 
        VALUES ('$nome_atividade','$data_inicio','$hora_inicio','$data_fim','$hora_fim')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nuvoni Test</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(20, 20, 20);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #3f3f3f;
            padding: 15px;
            border-radius: 5px;
            width: 40%;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
        }
        fieldset{
            border: 1px solid #008f81;
        }
        legend{
            border: 1px solid #008f81;
            border-radius: 5px;
            text-align: center;
            padding: 5px;
            background-color: #008f81;
            
        }
        .inputUser{
            border-radius: 5px;
        }
        #submit, a{
            background-color: #008f81;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 15px;
            border: none;
            padding: 5px;

        }
        #submit:hover, a:hover{
            background-color: #014b43
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="monitoramento.php" method="post">
            <fieldset>
                <legend><b>Monitoramento de Atividades</b></legend>
                <br>
                    <div class="inputBox">
                        <label for="name"><b>Nome Atividade</b></label>
                        <input type="text" name="nome" id="name" class="inputUser">
                        <br><br><br>
                        <label for="name"><b>Data Inicio</b></label>
                        <input type="date" name="data_inicio" id="date" class="inputUser" required>
                        <label for="name"><b>Hora Inicio</b></label>
                        <input type="Time" name="hora_inicio" id="time" class="inputUser" required>
                        <br><br><br>
                        <label for="name"><b>Data Fim</b></label>
                        <input type="date" name="data_fim" id="date" class="inputUser" required>
                        <label for="name"><b>Hora Fim</b></label>
                        <input type="Time" name="hora_fim" id="time" class="inputUser" required>
                    </div>

                    <br>

                    <div>
                        <input type="submit" name="submit" id="submit">
                        <a href="registro.php">Registros</a>
                    </div>  
            </fieldset>
        </form>
    </div>
</body>
</html>