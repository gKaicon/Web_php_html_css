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
    <title>Sistema de Teste</title>
</head>

<body>
    <h1>Sistema de Teste</h1>
    <hr>
    <a href="./visual/formCadastroVeiculo.php">Cadastrar veículo</a>
    <a href="./visual/listaVeiculo.php">Listar veículo</a>
    <a href="./visual/formCadastroReserva.php">Cadastrar reserva</a>
    <a href="./visual/listaReserva.php">Listar reserva</a>
    <a href="./autenticacao/logout.php">Sair</a>
</body>

</html>