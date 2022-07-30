<?php

require_once '../modelo/Funcionario.php';
require_once '../DAO/Conexao.php';
class DAOFuncionario{

    public function __construct() {
    }

    public function getLista(){
        $sql = 'Select * from Funcionario;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $e->getMessage();
        }
        return $lista;
    }

    public function Alterar($funcionario){
    }
    public function Inlcuir($funcionario){
        $sqlD = 'insert into Funcionario (nome, telefone, endereco, idade) Values(?,?,?,?); ' ;
        try {
            $pst = Conexao::getPreparedStatement($sqlD);
            $pst->bindValue(1, $funcionario->getNome());
            $pst->bindValue(2, $funcionario->getTelefone());
            $pst->bindValue(3, $funcionario->getEndereco());
            $pst->bindValue(4, $funcionario->getIdade());

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
    public function Remover($funcionario){
    }
    public function Localizar($id){
    }
}
?>