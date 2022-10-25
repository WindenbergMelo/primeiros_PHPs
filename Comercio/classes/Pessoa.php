<?php

abstract class Pessoa {
    protected $nome;
    protected $cpf;
    
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

}
