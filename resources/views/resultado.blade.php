<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    MODELO: {{$veiculo->modelo}}<br>
    ANO: {{$veiculo->ano}}<br>
    COR: {{$veiculo->cor}}<br>
    PLACA: {{$veiculo->placa}}<br>
    CHASSI: {{$veiculo->chassi}}<br>
    SITUACAO: {{$veiculo->situacao}}<br><br>
    DATA CONSULTA: {{$veiculo->dataConsulta}}<br>
</body>
</html>