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
    <title>Listagem de Veículos</title>
</head>

<body>
    <h1>Listagem dos Veículos</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Status</th>
        </tr>
        <?php
        $dv = new DaoVeiculo();
        $lista = $dv->listaTodos();
        foreach ($lista as $linha) {
            /*
            echo '<tr>';
            foreach ($linha as $atributo => $valor) {
                echo '<td>' .  $valor . '</td>';
            }
            echo '</tr>';
            */
            echo '<tr>';
            echo '<td>' .  $linha['id'] . '</td>';
            echo '<td>' .  $linha['fabricante'] . '</td>';
            echo '<td>' .  $linha['modelo'] . '</td>';
            echo '<td>' .  $linha['ano'] . '</td>';
            echo '<td>' .  $linha['placa'] . '</td>';
            echo '<td>' .  $linha['status'] . '</td>';
            echo '</tr>';
        }

        ?>

    </table>
    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroVeiculo.php">Cadastro</a>
    <a href="./listaVeiculo.php">Listagem</a>
</body>

</html>