<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Fornecedores</title>
</head>
<body>
    <h1>Listagem de Fornecedores</h1>
    <?php
        require_once '../DAO/DAOFornecedor.php';
        $dFo = new DAOFornecedor();
        echo '<br>FORNECEDORES<br>';
        echo '<pre>';
        print_r($dFo->getLista());
        echo '</pre>';
        echo '<br>';
    ?>
</body>
</html>