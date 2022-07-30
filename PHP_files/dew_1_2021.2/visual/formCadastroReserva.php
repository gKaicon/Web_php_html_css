<!DOCTYPE html>
<html lang="en">

<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');
require_once _BASE . 'autenticacao/checagem.php';
require_once _BASE . 'dao/Conexao.php';
require_once _BASE . 'modelo/Veiculo.php';
require_once _BASE . 'dao/DaoVeiculo.php';
$dv = new DaoVeiculo();
$lista = $dv->listaTodos();
$options = '';
foreach ($lista as $linha) {
    $descricao = $linha['fabricante'] . ' ' .  $linha['modelo'] . ' ' . $linha['ano'] . ' - ' . $linha['placa'];
    $options .= '<option value="' . $linha['id'] . '">' . $descricao . '</option>';
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/validacao.js"></script>
    <title>Cadastro de Reservas</title>
</head>

<body>
    <h1>Cadastro de Reservas</h1>
    <form action="./cadastroReserva.php" method="POST">
        <label for="veiculo">Veículo</label>
        <select name="veiculo" id="veiculo" required>
            <?php echo $options; ?>
        </select>
        <br>

        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" name="nomeCliente" id="nomeCliente" required><br>

        <label for="telefoneCliente">Telefone do Cliente</label>
        <input type="tel" name="telefoneCliente" id="telefoneCliente" required maxlength="14" pattern="\(\d{2}\)\d{5}-\d{4}"><br>

        <label for="dataFim">Até</label>
        <input type="date" name="dataFim" id="dataFim" required><br>

        <button>Cadastrar</button>
    </form>

    <hr>
    <a href="../index.php">Início</a>
    <a href="./formCadastroReserva.php">Cadastro</a>
    <a href="./listaReserva.php">Listagem</a>
</body>

</html>