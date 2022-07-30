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
    <title>Lista de Funcionário</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Lista de Funcionário</h1>
    <table border="black">
    <tr>
        <th>id_Funcionário</th>
        <th>Nome Funcionário</th>
        <th>Idade do Funcionário</th>
        <th>Endereço do Funcionário</th>
        <th>Telefone do Funcionário</th>
    </tr>
    <?php
       require_once ('../modelo/Funcionario.php');
       require_once ('../DAO/DAOFuncionario.php');
       $dFu = new DAOFuncionario();
       $lista = $dFu->getLista();

/*Optei por utilizar dois ForEach aqui também pelo fato das informações serem repetidas e ser mais fácil */
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