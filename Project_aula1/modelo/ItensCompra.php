<?php
require_once '../modelo/Produto.php';
require_once '../modelo/Compra.php';

class ItensCompra{

    private $id_ItensCompra;
    private $produto;
    private $compra;
    private $qntd;
    private $PrecoCompra;
    private $Subtotal;

    public function __construct(){
    }

    public function getId_ItensCompra(){
        return $this->id_ItensCompra;
    }

    public function setId_ItensCompra($id_ItensCompra){
        $this->id_ItensCompra = $id_ItensCompra;
        return $this;
    }

    public function getProduto(){
        if($this->produto == null){
            return $this->produto;    
        }else{
            return $this->produto;
        }
    }
    public function setProduto($produto){
        if($produto == null){
            $this->produto = $produto;
            return $this;
        }else{
            $this->produto = $produto;
            return $this;
        }
    }

    public function getCompra(){
        if($this->compra == null){
            return $this->compra;
        }else{
            return $this->compra;
        }
    }

    public function setCompra($compra){
        if($compra == null){
            $this->compra = $compra;
            return $this;
        }else{
            $this->compra = $compra;
            return $this;
        }
    }

    public function getQntd(){
        return $this->qntd;
    }

    public function setQntd($qntd){
        $this->qntd = $qntd;
        return $this;
    }

    public function getPrecoCompra(){
        if ($this->produto != null && ($this->getQntd) >= 1){
            return $this->PrecoCompra = ($this->produto->getPrecoVenda) * ($this->getQntd);
        }
        return $this->PrecoCompra;
    }

    public function setPrecoCompra($PrecoCompra){
        $this->PrecoCompra = $PrecoCompra;
        return $this;
    }

    public function getSubtotal(){
        if($this->produto != null){
            return $this->Subtotal = $this->produto->getPrecoVenda;       
        }
        return $this->Subtotal;
    }

    public function setSubtotal($Subtotal){
        $this->Subtotal = $Subtotal;
        return $this;
    }

}
?>