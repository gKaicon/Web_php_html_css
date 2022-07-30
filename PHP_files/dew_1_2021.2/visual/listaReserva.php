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
    <title>Listagem de Reservas</title>
</head>

<body>
    <h1>Listagem dos Reservas</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Veículo</th>
            <th>Início</th>
            <th>Fim</th>
            <th>Cliente</th>
            <th>Telefone</th>
        </tr>
        <?php
        $dr = new DaoReserva();
        $lista = $dr->listaTodos();
        foreach ($lista as $linha) {
            echo '<tr>';
            echo '<td>' .  $linha['id'] . '</td>';
            echo '<td>' .  $linha['veiculo'] . '</td>';
            echo '<td>' .  $linha['dataInicio'] . '</td>';
            echo '<td>' .  $linha['dataFim'] . '</td>';
            echo '<td>' .  $linha['nomeCliente'] . '</td>';
            echo '<td>' .  $linha['telefoneCliente'] . '</td>';
            echo '</tr>';
        }

        ?>

    </table>
    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroReserva.php">Cadastro</a>
    <a href="./listaReserva.php">Listagem</a>
</body>

</html>