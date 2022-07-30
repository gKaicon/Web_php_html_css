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
    <p>Preencha os dados a seguir</p>
    <form action="CadastroFuncionario.php" method="POST">
    <label for="nomeFuncionario">Nome do Funcionario:</label>
    <input type="text" name='nomeFuncionario' id=nomeFuncionario>
    <br>
    <label for="idadeCFuncionario">Idade do Funcionario:</label>
    <input type="number" name='idadeFuncionario' id=idadeFuncionario>
    <br>
    <label for="enderecoFuncionario">Endereço do Funcionario:</label>
    <input type="text" name='enderecoFuncionario' id=enderecoFuncionario>
    <br>
    <label for="telefoneFuncionario">Telefone do Funcionario:</label>
    <input type="number" name='telefoneFuncionario' id=telefoneFuncionario>
    <br>
    <button type="submit">Salvar</button>
    </form>
    
</body>
</html>