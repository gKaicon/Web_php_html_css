<?php

require_once ('../DAO/Conexao.php');
require_once ('../modelo/Usuario.php');

class DAOUsuario{
    public function procuraUm(Usuario $usuario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('select nome, senha from Usuario where nome = ?;');
        $pst->bindValue(1, $usuario->getNome());
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>