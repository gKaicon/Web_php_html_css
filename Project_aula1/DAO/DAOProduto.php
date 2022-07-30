<?php

require_once '../modelo/Produto.php';
require_once '../modelo/Fornecedor.php';
require_once '../DAO/Conexao.php';

class DAOProduto{
    public function __construct(){
    }

 public function getLista(){
        $sql = 'select id_Produto, p.nome as nomeProduto, precoCusto, precoVenda, unidade, p.id_fornecedor, f.nome as nomeFornecedor from Produto p
        join Fornecedor f on f.id_fornecedor = p.id_fornecedor;';
        $lista = array();
        try{
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();

        }
        return $lista;
    }


    public function Alterar($produto){
    }
    public function Inlcuir($produto){
        $sqlD = 'insert into Produto (nome, precoCusto, unidade, id_Fornecedor) Values(?,?,?,?); ' ;
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
                $pst->bindValue(1, $produto->getNome());
                $pst->bindValue(2, $produto->getPrecoCusto());
                $pst->bindValue(3, $produto->getUnidade());
                $pst->bindValue(4, $produto->getFornecedor());
                if($pst->execute()){
                    return true;
                }else{
                    return false;
                }
        }catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
    public function Remover($produto){
    }
    public function Localizar($id){
    }

}
?>