<?php

require_once '../modelo/Cliente.php';
require_once '../DAO/Conexao.php';
class DAOCliente{

    public function __construct() {
    }

    public function getLista(){
        $sql = 'select * from Cliente;';
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

    public function Alterar($cliente){
    }
    public function Inlcuir($cliente){
        $sqlD = 'insert into Cliente (nome, telefone, endereco, idade) Values(?,?,?,?); ' ;
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
            $pst->bindValue(1, $cliente->getNome());
            $pst->bindValue(2, $cliente->getTelefone());
            $pst->bindValue(3, $cliente->getEndereco());
            $pst->bindValue(4, $cliente->getIdade());

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
    public function Remover($cliente){

    }
    public function Localizar($id){

    }
}
?>