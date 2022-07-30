<?php

require_once '../modelo/Fornecedor.php';

class Produto{
    
    private $id_Produto;
    private $nome;
    private $precoCusto;
    private $precoVenda;
    private $unidade;
    private $fornecedor;

    public function __construct(){        
    }

    public function getId_Produto(){
        return $this->id_Produto;
    }

    public function setId_Produto($id_Produto){
        $this->id_Produto = $id_Produto;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }
 
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getPrecoCusto(){
        return $this->precoCusto;
    }


    public function setPrecoCusto($precoCusto){
        $this->precoCusto = $precoCusto;

        return $this;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }

    public function getUnidade(){
        return $this->unidade;
    }

    public function setUnidade($unidade){
        $this->unidade = $unidade;
        return $this;
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
    public function imprimirDados(){
        (string) $dados = '<br>ID: ' . $this->id_Produto . '<br> Nome: ' . $this->nome . 
        '<br>Preço de Custo ' .  $this->precoCusto . '<br>Preço de Venda: '.  
         $this->precoVenda . '<br>Unidade: ' . $this->unidade . '<br>';
         return (string) $dados;
     }

}
?>