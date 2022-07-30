<?php
class Veiculo
{
    private $id;
    private $fabricante;
    private $modelo;
    private $ano;
    private $placa;

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

	public function getFabricante()
	{
		return $this->fabricante;
    }
    
	public function setFabricante($fabricante)
	{
		$this->fabricante = $fabricante;
	}

	public function getModelo()
	{
		return $this->modelo;
    }
    
	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function getAno()
	{
		return $this->ano;
    }
    
	public function setAno($ano)
	{
		$this->ano = $ano;
	}

	public function getPlaca()
	{
		return $this->placa;
    }
    
	public function setPlaca($placa)
	{
		$this->placa = $placa;
	}

}
