<!DOCTYPE html>
<html lang="en">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once (_BASE .'/autenticar/checar.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Realização de Compras</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Realização de Compras</h1>
    <p>Preencha os Dados:</p>
    <form action="CadastroCompra.php" method="POST">
        <label for="dataCompra"> Data da Compra:</label>
        <input type="date" name = 'dataCompra' id=dataCompra>
        <br>
        <label for="compraFuncionario">Funcionario:</label>
        <select name='compraFuncionario' id=compraFuncionario>
            <?php
                require_once '../DAO/DAOFuncionario.php';
                $dFu = new DAOFuncionario();
                $lista = $dFu->getLista();
                foreach ($lista as $linha){
                    echo '<option value = " ' . $linha ['id_Funcionario']. ' ">' . $linha['nome'] . '</option>';
                }
            ?>
        </select>
        <br>
        <label for="compraFornecedor">Fornecedor:</label>
        <select name='compraFornecedor' id=compraFornecedor>
            <?php
                require_once '../DAO/DAOFornecedor.php';
                $dFo = new DAOFornecedor();
                $lista = $dFo->getLista();
                foreach ($lista as $linha){
                    echo '<option value = " ' . $linha ['id_Fornecedor']. ' ">' . $linha['nome'] . '</option>';
                }
            ?>
        </select>
        <br>

        <button type = "submit"> Salvar </button>
        
    </form>
</body>
</html>