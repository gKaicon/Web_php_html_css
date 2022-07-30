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
    <title>Lista de Clientes</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Clientes</h1>
    <p>Abaixo você verá a listagem de clientes</p>
    <table border="black">
    <tr>
        <th>id_Cliente</th>
        <th>Nome Cliente</th>
        <th>Idade do Cliente</th>
        <th>Endereço do Cliente</th>
        <th>Telefone do Cliente</th>
    </tr>
    <?php
       require_once ('../modelo/Cliente.php');
       require_once ('../DAO/DAOCliente.php');
       $dC = new DAOCliente();
       $lista = $dC->getLista();
  /*     
       foreach ($lista as $linha) {
           echo '<tr>';
           echo '<td>'. $linha['id_Cliente'] . '</td>';
           echo '<td>'. $linha['nome'] . '</td>';
           echo '<td>'. $linha['idade'] . '</td>';
           echo '<td>'. $linha['endereco'] . '</td>';
           echo '<td>'. $linha['telefone'] . '</td>';
           echo '<tr>';
       } 
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