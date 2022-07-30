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
    <title>Adicionar Itens da Compra</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Adicionar Itens da Compra</h1>
    <?php

    require_once '../DAO/DAOItensCompra.php';
    require_once '../modelo/ItensCompra.php';

    $ItensId_Compra = $_POST['ItensId_Compra'];
    $ItensId_Produto = $_POST['ItensId_Produto'];
    $ItensQntd = $_POST['ItensQntd'];

    $itensCompra = new ItensCompra();
    $itensCompra->setCompra($ItensId_Compra);
    $itensCompra->setProduto($ItensId_Produto);
    $itensCompra->setQntd($ItensQntd);

    $dIC = new DAOItensCompra();
    if ($dIC->Inlcuir($itensCompra)) {
        echo '<br><br> Itens adicionado a Compra com sucesso';
    } else {
        echo '<br><br> Itens não foram adicionados a Compra com sucesso';
    }
    
    ?>
    <br>   
    <br>
    <a href="listItensCompra.php">Listagem de Itens Compra</a>
</body>
</html>