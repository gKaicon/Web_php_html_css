<!DOCTYPE html>
<html lang="en">
<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');
require_once _BASE . 'autenticacao/checagem.php';
require_once _BASE . 'dao/Conexao.php';
require_once _BASE . 'modelo/Veiculo.php';
require_once _BASE . 'dao/DaoVeiculo.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
</head>

<body>
    <h1>Cadastro de Veículo</h1>
    <?php

    $fabricante = filter_input(INPUT_POST, 'fabricante');
    $modelo = filter_input(INPUT_POST, 'modelo');
    $ano = filter_input(INPUT_POST, 'ano');
    $placa = filter_input(INPUT_POST, 'placa');

    $v = new Veiculo();
    $v->setFabricante($fabricante);
    $v->setModelo($modelo);
    $v->setAno($ano);
    $v->setPlaca($placa);

    $dv = new DaoVeiculo();

    if ($dv->inclui($v)) {
        echo 'Veículo cadastrado com sucesso!';
    } else {
        echo 'Erro ao cadastrar o veículo!';
    }


    ?>
    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroVeiculo.php">Cadastro</a>
    <a href="./listaVeiculo.php">Listagem</a>
</body>

</html>