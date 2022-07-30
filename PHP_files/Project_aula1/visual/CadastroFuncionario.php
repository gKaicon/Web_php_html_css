<!DOCTYPE html>
<html lang="pt-BR">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once _BASE . 'autenticar/checar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Cadastro de Funcionarios</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Cadastro de Funcionarios</h1>
    <?php 

    require_once '../modelo/Funcionario.php';
    require_once '../DAO/DAOFuncionario.php';

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $idadeFuncionario = $_POST['idadeFuncionario'];
    $enderecoFuncionario = $_POST['enderecoFuncionario'];
    $telefoneFuncionario = $_POST['telefoneFuncionario'];

    $funcionario = new Funcionario();
    $funcionario->setNome($nomefuncionario);
    $funcionario->setEndereco($enderecofuncionario);
    $funcionario->setIdade($idadefuncionario);
    $funcionario->setTelefone($telefonefuncionario);

    $dFu = new DAOFuncionario();
    if($dFu->Inlcuir($funcionario)){
        echo 'Funcionario foi cadastrado corretamente';
    }else{
        echo '<br><br>Funcionario não foi cadastrado corretamente';
    }
?>
<br>
<br>
<a href="listFuncionario.php">Ver Listagem de Funcionarios</a>
</body>
</html>