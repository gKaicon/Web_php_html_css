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
    <script src="./Validacoes/ValidacaoTelefone.js"></script>
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Cadastro de Fornecedor</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
<h1>Cadastro de Fornecedor</h1>
    <p>Preencha os dados a seguir</p>
    <form action="CadastroFornecedor.php" method="POST">
    <label for="nomeFornecedor">Nome do Fornecedor:</label>
    <input type="text" name='nomeFornecedor' id=nomeFornecedor>
    <br>
    <label for="enderecoFornecedor">Endereço do Fornecedor:</label>
    <input type="text" name='enderecoFornecedor' id=enderecoFornecedor>
    <br>
    <label for="telefoneFornecedor">Telefone do Fornecedor:</label>
    <input type="text" name='telefoneFornecedor' id=telefoneFornecedorrequired maxlength="14" pattern="\(\d{2}\)\d{5}-\d{4}">
    <br>
    <button type="submit">Salvar</button>
    </form>
    
</body>
</html>