<?php
class Reserva
{
    private $id;
    private $veiculo;
    private $nomeCliente;
    private $telefoneCliente;
    private $dataInicio;
    private $dataFim;

	public function __construct() {
	}

	public function getId()
	{
		return $this->id;
    }
    
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getVeiculo()
	{
		return $this->veiculo;
    }
    
	public function setVeiculo($veiculo)
	{
		$this->veiculo = $veiculo;
	}

	public function getNomeCliente()
	{
		return $this->nomeCliente;
    }
    
	public function setNomeCliente($nomeCliente)
	{
		$this->nomeCliente = $nomeCliente;
	}

	public function getTelefoneCliente()
	{
		return $this->telefoneCliente;
    }
    
	public function setTelefoneCliente($telefoneCliente)
	{
		$this->telefoneCliente = $telefoneCliente;
	}

	public function getDataInicio()
	{
		return $this->dataInicio;
    }
    
	public function setDataInicio($dataInicio)
	{
		$this->dataInicio = $dataInicio;
	}

	public function getDataFim()
	{
		return $this->dataFim;
    }
    
	public function setDataFim($dataFim)
	{
		$this->dataFim = $dataFim;
	}
}
