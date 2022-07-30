<!DOCTYPE html>
<html lang="pt-BR">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once (_BASE .'/autenticar/checar.php');
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
    <?php

    require_once '../modelo/Produto.php';
    require_once '../DAO/DAOProduto.php';
    
    $nomeProduto = $_POST['nomeProduto'];
    $precoCustoProduto = $_POST['precoCustoProduto'];
    $unidadeProduto = $_POST['unidadeProduto'];
    $fornecedorProduto = $_POST['fornecedorProduto'];
    

    $produto = new Produto();
    $produto->setNome($nomeProduto);
    $produto->setPrecoCusto($precoCustoProduto);
    $produto->setUnidade($unidadeProduto);
    $produto->setFornecedor($fornecedorProduto);

    $dP = new DAOProduto();
    if($dP->Inlcuir($produto)){
        echo '<br><br> Produto cadastrado corretamente';
    }else{
        echo '<br><br> Produto não foi cadastrado corretamente';
}
    ?>
    <br>
<br>
<a href="listProduto.php">Ver Listagem de Produtos</a>
<br>
</body>
</html>
