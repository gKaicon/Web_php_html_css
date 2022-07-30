<?php

class Fornecedor{
    private $id_Fornecedor;
    private $nome;
    private $telefone;
    private $endereco;

    public function __construct() {
    }

    public function getId_Fornecedor(){
        return $this->id_Fornecedor;
    }

   
    public function setId_Fornecedor($id_Fornecedor){
        $this->id_Fornecedor = $id_Fornecedor;
    }

 
    public function getNome(){
        return $this->nome;
    }

 
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }


    public function getEndereco(){
        return $this->endereco;
    }


    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function imprimirDados(){
       (string) $dados = '<br>ID: ' . $this->id_Fornecedor . '<br> Nome: ' . $this->nome . '<br>Telefone: ' .  $this->telefone . '<br>Endereço: '.  
        $this->endereco . '<br>';
        return (string) $dados;
    }
}
?>