<!DOCTYPE html>
<html lang="en">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once _BASE . 'autenticar/checar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Cadastro de Produtos</h1>
    <p>Preencha os Dados</p>    
    <form action="CadastroProduto.php" method="POST">
        <label for="nomeProduto">Nome do Produto:</label>
        <input type="text" name='nomeProduto' id=nomeProduto>
        <br>
        <label for="precoCustoProduto">Preço de Custo:</label>
        <input type="number" step="0.10" name='precoCustoProduto' id=precoCustoProduto>
        <br>
        <label for="unidadeProduto">Unidades:</label>
        <input type="number" name='unidadeProduto' id=unidadeProduto>
        <br>
        <label for="fornecedorProduto">Fornecedor:</label>
        <select name='fornecedorProduto' id=fornecedorProduto>
            <?php
                require_once '../DAO/DAOFornecedor.php';
                $dFu = new DAOFornecedor();
                $lista = $dFu->getLista();
                foreach ($lista as $linha){
                    echo '<option value = " ' . $linha ['id_Fornecedor']. ' ">' . $linha['nome'] . '</option>';
                }
            ?>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>