<?php

require_once '../modelo/Produto.php';
require_once '../modelo/Compra.php';
require_once '../modelo/ItensCompra.php';
require_once '../DAO/Conexao.php';

class DAOItensCompra{

    public function __construct(){
    }

    public function getLista(){
        $sql = 'select id_ItensCompra, id_Compra, i.id_produto, p.nome, quantidade as Qntd, PrecoDeCompra, Subtotal from ItensCompra i 
        join produto p on i.id_Produto = p.id_Produto group by id_Itenscompra;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
                $pst->execute();
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
            return $lista;
    }
    public function Alterar($Itenscompra){
    }
    public function Inlcuir($Itenscompra){
        $sqlD = 'insert into ItensCompra(id_Compra, id_Produto, quantidade) values(?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
                $pst->bindValue(1, $Itenscompra->getCompra());
                $pst->bindValue(2, $Itenscompra->getProduto());
                $pst->bindValue(3, $Itenscompra->getQntd());
            
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

    public function Remover($Itenscompra){
    }
    public function Localizar($id){
    }
}
  
?>