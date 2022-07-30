
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Classes</title>
</head>
<body>
    
    <h1> Teste da classe Cliente, Fornecedor, Funcionario </h1>
    <?php 
    
    require_once ('./modelo/Funcionario.php');
    require_once ('./modelo/Fornecedor.php');
    require_once ('./modelo/Cliente.php');
    require_once ('./DAO/DAOCliente.php');
    require_once ('./DAO/DAOFuncionario.php');
    require_once ('./DAO/DAOFornecedor.php');
    require_once ('./DAO/Conexao.php');
    

    $cliente = new Cliente();
    $cliente->setNome('Kaicon');
    $cliente->setEndereco('Rua X');
    $cliente->setIdade(17);
    $cliente->setTelefone('33 987654325');

    $cliente1 = new Cliente();
    $cliente1->setNome('Kali');
    $cliente1->setEndereco('Rua X');
    $cliente1->setIdade(18);
    $cliente1->setTelefone('33 987674235');

    $cliente2 = new Cliente();
    $cliente2->setNome('Jão');
    $cliente2->setEndereco('Rua X');
    $cliente2->setIdade(21);
    $cliente2->setTelefone('33 987686225');

    $funcionario = new Funcionario();
    $funcionario->setNome('Gabriel');
    $funcionario->setEndereco('Rua X');
    $funcionario->setIdade(28);
    $funcionario->setTelefone('33 987654325');

    $fornecedor = new Fornecedor();
    $fornecedor->setNome('José');
    $fornecedor->setEndereco('Rua X');
    $fornecedor->setTelefone('21 987654325');

    echo 'Situação da Conexão: ' ; 
    Conexao::getConexao();
    $dC = new DAOCliente();
    $dFu = new DAOFuncionario();
    $dFo = new DAOFornecedor();

    echo '<br>CLIENTES<br>';    
    //echo $cliente->imprimirDados(); 
    $dC->Inlcuir($cliente);
    echo '<br>';

    //echo $cliente1->imprimirDados();
    $dC->Inlcuir($cliente1);
    echo '<br>';

    //echo $cliente2->imprimirDados();
    $dC->Inlcuir($cliente2);
    echo '<br>';

    echo '<br>FUNCIONÁRIOS<br>';
    //echo $funcionario->imprimirDados();
    $dFu ->Inlcuir($funcionario);
    echo '<br>';

    echo '<br>FORNECEDORES<br>';
    //echo $fornecedor->imprimirDados();
    $dFo ->Inlcuir($fornecedor);
    echo '<br>';

    echo '<br>CLIENTES<br>';
    echo '<pre>';
    print_r($dC->getLista());
    echo '</pre>';
    echo '<br>';

    echo '<br>FUNCIONÁRIOS<br>';
    echo '<pre>';
    print_r($dFu->getLista());
    echo '</pre>';
    echo '<br>';

    echo '<br>FORNECEDORES<br>';
    echo '<pre>';
    print_r($dFo->getLista());
    echo '</pre>';
    echo '<br>';
    
    ?>

</body>
</html>
