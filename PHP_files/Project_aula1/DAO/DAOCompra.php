<?php

require_once '../modelo/Funcionario.php';
require_once '../modelo/Fornecedor.php';
require_once '../modelo/Compra.php';
require_once '../DAO/Conexao.php';

class DAOCompra{
    public function __construct(){
    }

    public function getLista(){
        $sql = 'select id_Compra, dataCompra, valorTotal, c.id_funcionario, fu.nome as NomeFuncionario, c.id_fornecedor, 
        fo.nome as NomeFornecedor from Compra c join Fornecedor fo on fo.id_fornecedor = c.id_fornecedor 
        join Funcionario fu on fu.id_Funcionario = c.id_Funcionario order by id_Compra DESC;';
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
    public function Alterar($compra){
    }
    public function Inlcuir($compra){
        $sqlD = 'insert into Compra(id_Fornecedor, id_Funcionario, dataCompra, valorTotal) values (?,?,?,0);';
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
                $pst->bindValue(1, $compra->getFornecedor());
                $pst->bindValue(2, $compra->getFuncionario());
                $pst->bindValue(3, $compra->getDataCompra());
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
    public function identificarCompra(){
        $sql = 'select max(id_Compra) from Compra;';
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

    public function Remover($compra){
        
    }
    public function Localizar($id){
    }
}
    
?>
