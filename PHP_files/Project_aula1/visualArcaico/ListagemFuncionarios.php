<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionarios</title>
</head>
<body>
    <h1>Listagem de Funcionarios</h1>
    <?php
        require_once '../DAO/DAOFuncionario.php';
        $dFu = new DAOFuncionario();
        echo '<br>FUNCIONARIOS<br>';
        echo '<pre>';
        print_r($dFu->getLista());
        echo '</pre>';
        echo '<br>';
    ?>
</body>
</html>