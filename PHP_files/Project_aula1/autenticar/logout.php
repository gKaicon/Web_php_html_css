<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
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
        <h1>Logout</h1>
        <?php
        session_start();
        unset($_SESSION);
        session_destroy();

        echo 'Você saiu da área logada!';
        echo '<br><br><a href="./formLogin.php">Entrar novamente</a>';
        ?>
    </div>

</body>

</html>