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
    <title>Realização de Compras</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Realização de Compras</h1>

    <?php
    require_once '../DAO/DAOCompra.php';
    require_once '../modelo/Compra.php';

    $dataCompra = $_POST['dataCompra'];
    $compraFuncionario = $_POST['compraFuncionario'];
    $compraFornecedor = $_POST['compraFornecedor'];

    $compra = new Compra();
    $compra->setDataCompra($dataCompra);
        if($compraFuncionario == null){
        $compra->setFuncionario($compraFuncionario);
        }else{
            $compra->setFuncionario($compraFuncionario);
        }if($compraFornecedor == null){
            $compra->setFornecedor($compraFornecedor);
        }else{
            $compra->setFornecedor($compraFornecedor);
        }
    $dC = new DAOCompra();
        if ($dC->Inlcuir($compra)){
            echo '<br><br> Compra realizada com sucesso, adicione Itens a Ela';
        } else {
            echo '<br><br> Compra não foi realizada com sucesso';
        }
    ?>
    <br>
    <th>Id_Compra:</th>
    <?php
        $dC = new DAOCompra();
        $lista = $dC->identificarCompra();
            foreach ($lista as $linha) {
                echo '<tr>';
                    foreach ($linha as $valor) {
                        echo '<td>'. $valor . '</td>';
                    }
                echo '<tr>';
            }
    ?>
    <br>
    <br>
    <button onclick="location.href = 'FormCadastroItensCompra.php';" padding = "10px 50px">Adicionar Itens na Compra</button>
    <br>
</body>
</html>