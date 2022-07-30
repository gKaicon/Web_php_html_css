<?php
class Depoimento{
    private $id;
    private $codigoIbge;
    private $nomeIbge;
    private $comentario;

    public function __construct(){
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCodigoIbge(){
        return $this->codigoIbge;
    }

    public function setCodigoIbge($codigoIbge){
        $this->codigoIbge = $codigoIbge;
    }

    public function getNomeIbge(){
        return $this->nomeIbge;
    }

    public function setNomeIbge($nomeIbge){
        $this->nomeIbge = $nomeIbge;
    }

	public function getComentario(){
		return $this->comentario;
    }
    
	public function setComentario($comentario){
		$this->comentario = $comentario;
	}
}
