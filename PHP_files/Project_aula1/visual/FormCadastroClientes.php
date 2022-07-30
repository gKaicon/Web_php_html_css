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
<h1>Cadastro de Clientes</h1>
    <p>Preencha os dados a seguir:</p>
    <form action="CadastroCliente.php" method="POST">
            <label for="nomeCliente">Nome do Cliente:</label>
            <br>
            <input type="text" name='nomeCliente' id=nomeCliente>
        <p>  </p>
            <label for="idadeCliente">Idade do Cliente:</label>
            <br>
            <input type="number" name='idadeCliente' id=idadeCliente>
        <p>  </p>
            <label for="enderecoCliente">Endereço do Cliente:</label>
            <br>
            <input type="text" name='enderecoCliente' id=enderecoCliente>
        <p>  </p>
            <label for="telefoneCliente">Telefone do Cliente:</label>
            <br>
            <input type="number" name='telefoneCliente' id=telefoneCliente>
        <p>  </p>
            <button type="submit">Salvar</button>
    </form>
    
</body>
</html>