<?php
    include_once('config.php');


    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Atividade</title>

    <style>
         body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(20, 20, 20);
        }
         a{
            background-color: #008f81;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 15px;
            border: none;
            padding: 5px;
        }
        .table-bg{
            background: rgba(0,0,0,0.5);
        }
        .table{
            font-size: 12px;
            color: white;
            width: 100%;
            border-radius: 10px;
            border: 1px;
            background-color: #008f81;
            padding: 5px;
        }
        tr{
            text-align: left;
        }
    </style>

</head>
<body>
    <a href="monitoramento.php">Voltar</a>
    <br><br>
    </div>
        <table class="table table-striped">
                    <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Data Inicio</th>
                                <th scope="col">hora Inicio</th>
                                <th scope="col">Data Fim</th>
                                <th scope="col">Hora Fim</th>
                                <th scope="col"></th>
                            </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['id']."</td>";
                                echo "<td>".$user_data['nome_atividade']."</td>";
                                echo "<td>".$user_data['data_inicio']."</td>";
                                echo "<td>".$user_data['hora_inicio']."</td>";
                                echo "<td>".$user_data['data_fim']."</td>";
                                echo "<td>".$user_data['hora_fim']."</td>";
                                echo "<td>

                                    <a class='btn' href='delete.php?id=$user_data[id]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                        </svg>
                                    </a>
                                </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
        </table>
  
    </div>
</body>
</html>
