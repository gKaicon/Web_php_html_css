<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Teste</title>
    <style>
        html, body {
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
        div.group{
            display: flex;
            justify-content: space-evenly;
        }
        label
        {
            width: 25%;
        }
        input
        {
            width: 70%;
            margin: 5px 0;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 0.2px solid darkturquoise;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="./login.php" method="POST">
            <div class="group">
                <label for="nome">Usuário</label>
                <input type="text" name="nome" id="nome" placeholder="Usuário">
            </div>
            <div class="group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
            </div>
            <button>Login</button>
        </form>
    </div>
</body>

</html>