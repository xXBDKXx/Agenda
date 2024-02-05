<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</head>
<body style="background-color: rgb(144, 108, 245)">
    <div class="container">
        <div class="container p-3" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;"> 
            <h1 style="text-align: center">Tarefas</h1>
            <table border="1" class="table table-dark table-bordered table-hover">
                <tr>
                    <th>Nome</th>
                    <th>Importancia</th>
                    <th>Descrição</th>
                    <th>Data de Inicio</th>
                    <th>Data Final</th>
                </tr>
                @foreach ($dados as $dado)
                <tr>
                    <td>{{$dado->nome}}</td>
                    <td>{{$dado->importancia}}</td>
                    <td>{{$dado->descricao}}</td>
                    <td>{{$dado->dataInicio}}</td>
                    <td>{{$dado->dataFinal}}</td>
                </tr>
                @endforeach
            </table>  
        </div>
    </div>
</body>
</html>