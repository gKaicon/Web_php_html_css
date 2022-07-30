<!DOCTYPE html>
<html lang="pt-BR">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once _BASE . '../autenticar/checar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Cadastro de Clientes</title>
</head>
<body>
<nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
</nav>
<?php
    require_once '../modelo/Cliente.php';
    require_once '../DAO/DAOCliente.php';

    $nomeCliente = $_POST['nomeCliente'];
    $idadeCliente = $_POST['idadeCliente'];
    $enderecoCliente = $_POST['enderecoCliente'];
    $telefoneCliente = $_POST['telefoneCliente'];

    $cliente = new Cliente();
    $cliente->setNome($nomeCliente);
    $cliente->setEndereco($enderecoCliente);
    $cliente->setIdade($idadeCliente);
    $cliente->setTelefone($telefoneCliente);

    $dC = new DAOCliente();
    if($dC->Inlcuir($cliente)){
        echo 'Cliente foi cadastrado corretamente';
    }else{
        echo 'Cliente não foi cadastrado corretamente';
    }
?>
</body>
</html>