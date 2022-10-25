<?php
require_once 'classes/Pessoa.php';
class Vendedor extends Pessoa{
    
    private $salario;
    
    function bonusVenda(){
        $this->salario += ($this->salario*10)/100;
    }
    
    public function __construct($nome,$cpf, $sal ) {       
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $sal;
    }
    
    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }
}
