<?php
class DaoUsuario
{
    public function listaTodos()
    {        
    }

    public function procuraUm(Usuario $usuario)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement(
            'select nome, senha from usuario 
            where nome = ?;'
        );
        $pst->bindValue(1, $usuario->getNome());
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Usuario $usuario)
    {
    }

    public function exclui(Usuario $usuario)
    {
    }

    public function altera(Usuario $usuario)
    {
    }
}
