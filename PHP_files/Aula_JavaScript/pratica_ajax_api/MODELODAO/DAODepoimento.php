<?php
require_once('/MODELODAO/Conexao.php');

class DAODepoimento{
    public function __construct() {

    }

    public function getLista(){
        $sql = 'select * from depoimento;';
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

    public function incluir($depoimento){
        $sql = 'insert into depoimento (codigoIbge, nomeIbge, comentario) values (?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $depoimento->getCodigoIbge());
            $pst->bindValue(2, $depoimento->getNomeIbge());
            $pst->bindValue(3, $depoimento->getComentario());
            if($pst->execute()){
                return true;
            }
            else{
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}