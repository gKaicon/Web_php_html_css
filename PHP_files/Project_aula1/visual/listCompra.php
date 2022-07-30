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
    <link rel="stylesheet" href="../style/styleListagem.css">
    <title>Listagem de Compras</title>

</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Compras</h1>
    <table border="black">
        <tr>
            <th>id_Compra</th>
            <th>DataCompra</th>
            <th>ValorTotal</th>
            <th>id_Funcionario</th>
            <th>Nome do Funcionario</th>
            <th>id_Fornecedor</th>
            <th>Nome do Fornecedor</th>
        </tr>
        <?php

        require_once '../modelo/Compra.php';
        require_once '../DAO/DAOCompra.php';

        $dC = new DAOCompra();
        $lista = $dC->getLista();

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