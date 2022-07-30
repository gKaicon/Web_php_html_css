<!DOCTYPE html>
<html lang="en">

<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');
require_once _BASE . 'autenticacao/checagem.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
</head>

<body>
    <h1>Cadastro de Veículos</h1>
    <form action="./cadastroVeiculo.php" method="POST">
        <label for="fabricante">Fabricante</label>
        <input type="text" name="fabricante" id="fabricante"><br>

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo"><br>

        <label for="ano">Ano</label>
        <input type="text" name="ano" id="ano"><br>

        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa"><br>

        <button>Cadastrar</button>
    </form>
    <hr>
    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroVeiculo.php">Cadastro</a>
    <a href="./listaVeiculo.php">Listagem</a>
</body>

</html>