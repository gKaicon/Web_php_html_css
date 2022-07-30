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
    <title>Itens da Compra</title>
</head>
<body>
<nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Itens comprados</h1>
    <table border="black">
        <tr>
            <th>id_ItensCompra</th>
            <th>Compra</th>
            <th>id_Produto</th>
            <th>Produto</th>
            <th>Qntd.</th>
            <th>Subtotal</th>
            <th>Preço da Compra</th>
        </tr>
        <?php
        require_once '../modelo/ItensCompra.php';
        require_once '../DAO/DAOItensCompra.php';
        
        $dIC = new DAOItensCompra();
        $lista = $dIC->getLista();

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