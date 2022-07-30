<?php
class DaoReserva
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement(
            'select 
            r.id, concat(v.modelo, " ", v.ano, " ", v.placa) as veiculo, r.dataInicio, r.dataFim, r.nomeCliente, r.telefoneCliente  
            from reserva r join veiculo v
            on r.veiculo = v.id;'
        );
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Reserva $reserva)
    {
        $sql = 'insert into reserva (veiculo,nomeCliente,telefoneCliente,dataFim) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $reserva->getVeiculo());
        $pst->bindValue(2, $reserva->getNomeCliente());
        $pst->bindValue(3, $reserva->getTelefoneCliente());
        $pst->bindValue(4, $reserva->getDataFim());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui(Reserva $reserva)
    {
    }

    public function altera(Reserva $reserva)
    {
    }
}
