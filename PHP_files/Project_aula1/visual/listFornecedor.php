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
    <title>Lista de Fornecedor</title>

</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Fornecedor</h1>
    <table border="black">
    <tr>
        <th>id_Fornecedor</th>
        <th>Nome Fornecedor</th>
        <th>Endereço do Fornecedor</th>
        <th>Telefone do Fornecedor</th>
    </tr>
    <?php
       require_once ('../modelo/Fornecedor.php');
       require_once ('../DAO/DAOFornecedor.php');
       $dFo = new DAOFornecedor();
       $lista = $dFo->getLista();

/*Optei por utilizar dois ForEach pelo fato das informações serem repetidas
*/

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