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
    <link rel="stylesheet" href="../style/styleListagem.css">
    <title>Lista de Produtos</title>

</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Produtos</h1>
    <table border="black">
    <tr>
        <th>id_Produto</th>
        <th>Nome</th>
        <th>Preço de Custo</th>
        <th>Preço de Venda</th>
        <th>Unidade</th>
        <th>Fornecedor</th>
        <th>Nome do Fornecedor</th>
    </tr>
    <?php
       require_once ('../modelo/Produto.php');
       require_once ('../DAO/DAOProduto.php');
       $dP = new DAOProduto();
       $lista = $dP->getLista();    
       foreach ($lista as $linha) {
            echo '<tr>';
                foreach ($linha as $valor) {
                    echo '<td>'. $valor . '</td>';
                }
            echo '<tr>';
    }

    ?>
    </table>
</body>
</html>