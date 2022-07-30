<!DOCTYPE html>
<html lang="en">
<?php 
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Project_Aula1/');
    require_once _BASE . 'autenticar/checar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForms.css">
    <title>Adicionar Itens da Compra</title>
</head>
<body>
    <nav>
      <a href="paginaInicial.html">Pagina Inicial</a>
    </nav>
    <h1>Adicionar Itens da Compra</h1>
    <p>Preencha os dados:</p>
    <form action="CadastroItensCompra.php" method="POST">
        <label for="ItensId_Compra">Id_Compra</label>
        <select name="ItensId_Compra" id="ItensId_Compra">
        <?php                
            require_once '../DAO/DAOCompra.php';
            $dC = new DAOCompra();
            $lista = $dC->getLista();
            foreach ($lista as $linha){
                echo '<option value = " ' . $linha ['id_Compra']. ' ">' . $linha ['id_Compra'] . '</option>';
            }
        ?>
        </select>
        <br>
        <label for="ItensId_Produto">Produto</label>
        <select name="ItensId_Produto" id="ItensId_Produto">
        <?php                
            require_once '../DAO/DAOProduto.php';
            $dP = new DAOProduto();
            $lista = $dP->getLista();
            foreach ($lista as $linha){
                echo '<option value = " ' . $linha ['id_Produto']. ' ">' . $linha ['nomeProduto'] . '</option>';
            }
        ?>
        
        </select>
        <br>
        <label for="ItensQntd">Quantidade: </label>
        <input type="number" name="ItensQntd" id="ItensQntd">
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>