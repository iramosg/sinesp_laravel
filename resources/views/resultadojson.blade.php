<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    INSIRA A PLACA: <input type="text" name="PlacaPost" id="PlacaPost">
    <br><br>
    MARCA: <input type="text" name="Marca" id="Marca"><br>
    MODELO: <input type="text" name="Modelo" id="Modelo"><br>
    ANO: <input type="text" name="Ano" id="Ano"><br>
    COR: <input type="text" name="Cor" id="Cor"><br>
    PLACA: <input type="text" name="Placa" id="Placa"><br>
    CHASSI: <input type="text" name="Chassi" id="Chassi"><br>
    SITUACAO: <input type="text" name="Situacao" id="Situacao"><br>
    MUNICIPIO: <input type="text" name="Municipio" id="Municipio"><br>
    ESTADO: <input type="text" name="UF" id="UF"><br><br>
    DATA CONSULTA: <input type="text" name="DataConsulta" id="DataConsulta"><br>
    
    <div id="postRequest">
        
    </div>
    
    <script>
        $(document).ready(function(){
            $("#PlacaPost").focusout(function(){

                var url = "/buscar-json-get/||placa||";
                var placa = $("#PlacaPost").val();
                url = url.replace("||placa||", placa);
                
                $.ajax({
                    method: "GET",
                    url: url,
                    beforeSend: function(xhr){
                        document.getElementById("Marca").value = "...";
                    document.getElementById("Modelo").value = "...";
                    document.getElementById("Ano").value = "...";
                    document.getElementById("Cor").value = "...";
                    document.getElementById("Placa").value = "...";
                    document.getElementById("Chassi").value = "...";
                    document.getElementById("Municipio").value = "...";
                    document.getElementById("UF").value = "...";
                    document.getElementById("Situacao").value = "...";
                    document.getElementById("DataConsulta").value = "...";
                    }
                })
                .done(function(retorno) {
                    //console.log(retorno);
                    document.getElementById("Marca").value = retorno.marca;
                    if(document.getElementById("Marca").value == "") {
                        alert("CARRO NÃO ENCONTRADO");
                    }
                    document.getElementById("Modelo").value = retorno.modelo;
                    document.getElementById("Ano").value = retorno.ano;
                    document.getElementById("Cor").value = retorno.cor;
                    document.getElementById("Placa").value = retorno.placa;
                    document.getElementById("Chassi").value = retorno.chassi;
                    document.getElementById("Municipio").value = retorno.municipio;
                    document.getElementById("UF").value = retorno.uf;
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