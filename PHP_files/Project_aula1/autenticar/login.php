<!DOCTYPE html>
<html lang="pt-Br">
<?php

define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_aula1/');
require_once (_BASE . 'DAO/Conexao.php');
require_once (_BASE . 'modelo/Usuario.php');
require_once (_BASE . 'DAO/DAOUsuario.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div.container {
            width: 30%;
            background-color: honeydew;
            border-radius: 3px;
            border: 0.3px solid lemonchiffon;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        $nome = filter_input(INPUT_POST, 'nome');
        $senha = filter_input(INPUT_POST, 'senha');

        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setSenha($senha);

        $daoUsu = new DaoUsuario();
        $lista = $daoUsu->procuraUm($usuario);

        if (count($lista) > 0 && password_verify($usuario->getSenha(), $lista[0]['senha'])) {
            session_start();
            $_SESSION['nome'] = $lista[0]['nome'];
            echo 'Login com sucesso!';
            echo '<br><br><a href="../visual/paginaInicial.html">Início</a>';
        } else {
            echo 'Erro ao realizar o login!';
            echo '<br><br><a href="./formLogin.php">Tentar novamente</a>';
        }

        ?>
    </div>
</body>

</html>