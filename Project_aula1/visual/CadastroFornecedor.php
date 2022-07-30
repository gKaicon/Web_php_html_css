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
    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Cadastro de Fornecedores</h1>
    <?php

    require_once '../modelo/Fornecedor.php';
    require_once '../DAO/DAOFornecedor.php';

    $nomeFornecedor = $_POST['nomeFornecedor'];
    $enderecoFornecedor = $_POST['enderecoFornecedor'];
    $telefoneFornecedor = $_POST['telefoneFornecedor'];

    $fornecedor = new Fornecedor();
    $fornecedor->setNome($nomeFornecedor);
    $fornecedor->setEndereco($enderecoFornecedor);
    $fornecedor->setTelefone($telefoneFornecedor);

    $dFo = new DAOFornecedor();
    if($dFo->Inlcuir($fornecedor)){
        echo 'Fornecedor foi cadastrado corretamente';
    }else{
        echo 'Fornecedor não foi cadastrado corretamente';
    }

    ?>
    <br>
    <br>
    <a href="listFornecedor.php">Ver Listagem de Fornecedores </a>
</body>
</html>