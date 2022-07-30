<?php

class Cliente{
    private $id_Cliente;
    private $nome;
    private $telefone;
    private $endereco;
    private $idade;

    public function __construct() {
    }

    public function getId_Cliente(){
        return $this->id_Cliente;
    }

   
    public function setId_Cliente($id_Cliente){
        $this->id_Cliente = $id_Cliente;
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

    public function getIdade(){
        return $this->idade;
    }


    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function imprimirDados(){
       (string) $dados = '<br>ID: ' . $this->id_Cliente . '<br> Nome: ' . $this->nome . '<br>Telefone: ' .  $this->telefone . '<br>Endereço: '.  
        $this->endereco . '<br>Idade: ' . $this->idade . '<br>';
        return (string) $dados;
    }
}
?>