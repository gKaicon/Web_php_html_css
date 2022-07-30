<?php
require_once '../DAO/Conexao.php';
class DAOUsuario{
    public function procuraUm(Usuario $usuario){
        $lista = [];
        $pst = Conexao::getPreparedStatement('select nome, senha from Usuario where nome = ?;'
        );
        $pst->bindValue(1, $usuario->getNome());
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>