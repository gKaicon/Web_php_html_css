<?php

require_once '../modelo/Fornecedor.php';
require_once '../DAO/Conexao.php';
class DAOFornecedor{

    public function __construct() {
    }

    public function getLista(){
        $sql = 'Select * from Fornecedor;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            $e->getMessage();
        }     
        return $lista;
    }

    public function Alterar($fornecedor){
    }
    public function Inlcuir($fornecedor){
        $sqlD = 'insert into Fornecedor (nome, telefone, endereco) Values(?,?,?); ' ;
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
            $pst->bindValue(1, $fornecedor->getNome());
            $pst->bindValue(2, $fornecedor->getTelefone());
            $pst->bindValue(3, $fornecedor->getEndereco());

        if($pst->execute()){
           
            return true;
        }else{
            
            return false;
        }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
    public function Remover($fornecedor){
    }
    public function Localizar($id){
    }
}
?>