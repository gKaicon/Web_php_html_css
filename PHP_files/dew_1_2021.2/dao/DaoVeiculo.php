<?php
class DaoVeiculo
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from veiculo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Veiculo $veiculo)
    {
        $sql = 'insert into veiculo (fabricante,modelo,ano,placa) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getFabricante());
        $pst->bindValue(2, $veiculo->getModelo());
        $pst->bindValue(3, $veiculo->getAno());
        $pst->bindValue(4, $veiculo->getPlaca());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui(Veiculo $veiculo)
    {
        $sql = 'delete from veiculo where id = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Veiculo $veiculo)
    {
        $sql = 'update veiculo set fabricante = ?, modelo = ?, ano = ?, placa = ? where id = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $veiculo->getFabricante());
        $pst->bindValue(2, $veiculo->getModelo());
        $pst->bindValue(3, $veiculo->getAno());
        $pst->bindValue(4, $veiculo->getPlaca());
        $pst->bindValue(5, $veiculo->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
