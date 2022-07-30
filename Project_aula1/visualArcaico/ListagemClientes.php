<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <?php
        require_once '../DAO/DAOCliente.php';
        $dC = new DAOCliente();
        echo '<br>CLIENTES<br>';
        echo '<pre>';
        print_r($dC->getLista());
        echo '</pre>';
        echo '<br>';
    ?>
</body>
</html>