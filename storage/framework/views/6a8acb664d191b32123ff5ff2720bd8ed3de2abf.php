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
    MODELO: <?php echo e($veiculo->modelo); ?><br>
    ANO: <?php echo e($veiculo->ano); ?><br>
    COR: <?php echo e($veiculo->cor); ?><br>
    PLACA: <?php echo e($veiculo->placa); ?><br>
    CHASSI: <?php echo e($veiculo->chassi); ?><br>
    SITUACAO: <?php echo e($veiculo->situacao); ?><br><br>
    DATA CONSULTA: <?php echo e($veiculo->dataConsulta); ?><br>
</body>
</html>