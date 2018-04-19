<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    INSIRA A PLACA: <input type="text" name="PlacaPost" id="PlacaPost">
    <br><br>
    MODELO: <input type="text" name="Modelo" id="Modelo"><br>
    ANO: <input type="text" name="Ano" id="Ano"><br>
    COR: <input type="text" name="Cor" id="Cor"><br>
    PLACA: <input type="text" name="Placa" id="Placa"><br>
    CHASSI: <input type="text" name="Chassi" id="Chassi"><br>
    SITUACAO: <input type="text" name="Situacao" id="Situacao"><br><br>
    DATA CONSULTA: <input type="text" name="DataConsulta" id="DataConsulta"><br>
    
    <div id="postRequest">
        
    </div>
    
    <script>
        $(document).ready(function(){
            $("#PlacaPost").focusout(function(){
                
                var url = "/buscar-json-get/||placa||";
                var placa = $("#PlacaPost").val();
                console.log(placa);
                url = url.replace("||placa||", placa);
                console.log(url);
                
                $.ajax({
                    method: "GET",
                    url: url,
                    beforeSend: function(xhr){
                        //show load gif
                        console.log("mostra o gif monstro!!!");
                    }
                })
                .done(function(retorno) {
                    //console.log(retorno);
                    document.getElementById("Modelo").value = retorno.modelo;
                    document.getElementById("Ano").value = retorno.ano;
                    document.getElementById("Cor").value = retorno.cor;
                    document.getElementById("Placa").value = retorno.placa;
                    document.getElementById("Chassi").value = retorno.chassi;
                    document.getElementById("Situacao").value = retorno.situacao;
                    document.getElementById("DataConsulta").value = retorno.dataConsulta;
                }).fail(function(erro){
                    //console.log(erro);
                }).always(function(){
                    //hide load gif
                    $(".js-bloq").removeAttr("disabled");
                });
            });
            
        });
    </script>
</body>
</html>