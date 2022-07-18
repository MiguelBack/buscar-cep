<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Consultando o CEP</title>
</head>

<body>

    <h1>Informe o CEP a ser localizado</h1>

    <form method="POST" action="">
    <label for="cep"> CEP:</label>
    <input type="text" name="cep" id="cep" /> <br />
    <input type="submit" value="Buscar"/>
    </form>
    
    <?php
    require_once("buscar.php");
    $endereco = "";

    if (isset($_POST["cep"]) && trim($_POST["cep"] != "")) {
        $endereco = json_decode(buscarCep($_POST["cep"]));
      
   }

    if ($endereco != "") {
    ?>

        <p>Resultado da pesquisa:</p>
        <p>CEP: <?= $endereco->cep ?> </p>
        <p>Cidade: <?= $endereco->localidade ?> </p>

</body>

<?php
    }
?>

</html>