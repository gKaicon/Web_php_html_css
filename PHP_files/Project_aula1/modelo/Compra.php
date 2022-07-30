<?php

require_once '../modelo/Funcionario.php';
require_once '../modelo/Fornecedor.php';

 class Compra{

    private $id_Compra;
    private $dataCompra;
    private $valorTotal;
    private $funcionario;
    private $fornecedor;

    public function __construct() {
    }

    public function getId_Compra(){
        return $this->id_Compra;
    }

    public function setId_Compra($id_Compra){
        $this->id_Compra = $id_Compra;
        return $this;
    }

    public function getDataCompra(){
        return $this->dataCompra;
    }

    public function setDataCompra($dataCompra){
        $this->dataCompra = $dataCompra;
        return $this;
    }
    
    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getFuncionario(){
        if($this->funcionario == null){
            return $this->funcionario;
        }else{
            return $this->funcionario;
        }
    }

    public function setFuncionario($funcionario){
        if($funcionario==null){
            $this->funcionario = $funcionario;
            return $this;
        }else{
            $this->funcionario = $funcionario;
            return $this;
        }
    }

    public function getFornecedor(){
        if($this->fornecedor == null){
            return $this->fornecedor;
        }else{
            return $this->fornecedor;
        }
    } 
    public function setFornecedor($fornecedor){
        if($fornecedor == null){
            $this->fornecedor = $fornecedor;
            return $this;
        }else{
            $this->fornecedor = $fornecedor;
            return $this;
        }
    }
    public function ImprimirDados(){
        (string) $dados = '<br>ID de Compra: ' . $this->id_Compra;
        return (string) $dados;
    }

 }
?>

