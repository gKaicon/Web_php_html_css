<!DOCTYPE html>
<html lang="en">
<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');
require_once _BASE . 'autenticacao/checagem.php';
require_once _BASE . 'dao/Conexao.php';
require_once _BASE . 'modelo/Reserva.php';
require_once _BASE . 'dao/DaoReserva.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Reserva</title>
</head>

<body>
    <h1>Cadastro de Reserva</h1>
    <?php

    $veiculo = filter_input(INPUT_POST, 'veiculo');
    $nomeCliente = filter_input(INPUT_POST, 'nomeCliente');
    $telefoneCliente = filter_input(INPUT_POST, 'telefoneCliente');
    $dataFim = filter_input(INPUT_POST, 'dataFim');

    if ($veiculo && $nomeCliente && $telefoneCliente && $dataFim) {
        $r = new Reserva();
        $r->setVeiculo($veiculo);
        $r->setNomeCliente($nomeCliente);
        $r->setTelefoneCliente($telefoneCliente);
        $r->setDataFim($dataFim);

        $dr = new DaoReserva();

        if ($dr->inclui($r)) {
            echo 'Reserva cadastrada com sucesso!';
        } else {
            echo 'Erro ao cadastrar a reserva!';
        }
    } else {
        echo 'Erro ao cadastrar a reserva! Dados ausentes ou com erros.';
    }

    ?>
    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroReserva.php">Cadastro</a>
    <a href="./listaReserva.php">Listagem</a>
</body>

</html>