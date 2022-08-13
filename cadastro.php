<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Cadastro</title>

    <script src="jquery-3.6.0.min.js"> </script>

    <script>
        $(document).ready(function() {
            $("#cep").blur(function() {

                $.post("buscar.php", "cep="+$("#cep").val(), function(data){
                    if(data != ""){
                        var obj = jQuery.parseJSON(data);
                        $("#cidade").val(obj.localidade);

                    }

                })

            });

        });
    </script>



</head>

<body>

    <h1>Cadastro de Clientes</h1>
    <form method="POST" action="inserir.php">

        CEP: <input type="text" name="cep" id="cep" /> <br />

        Cidade: <input type="text" name="cidade" id="cidade" /> <br />

        <input type="submit" value="Cadastrar">



    </form>

</body>


</html>