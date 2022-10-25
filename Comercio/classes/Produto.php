<?php

class Produto {

    private $nome;
    private $valor;
    private $qtdEstoque;
    private $codBarra;
    
    public function __construct($nome, $valor,$qtdEstoque, $codBarra) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->qtdEstoque = $qtdEstoque;
        $this->codBarra = $codBarra;
    }
    
    public function prodComprado($qnt){
        $this->qtdEstoque -= $qnt;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getValor() {
        return $this->valor;
    }

    public function getQtdEstoque() {
        return $this->qtdEstoque;
    }   

    public function getCodBarra() {
        return $this->codBarra;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
    
    public function setValor($valor): void {
        $this->valor = $valor;
    }

    public function setQtdEstoque($qtdEstoque): void {
        $this->qtdEstoque = $qtdEstoque;
    }

    public function setCodBarra($codBarra): void {
        $this->codBarra = $codBarra;
    }


}
