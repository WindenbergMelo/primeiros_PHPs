<?php
require_once 'classes/Pessoa.php';
class Cliente extends Pessoa{
    
    private $devendo;
    private $cep;
    private $rua;
    private $numero;
    private $saldo;
    
    public function __construct($nome, $cpf, $cep, $rua, $numero, $saldo) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->devendo = 0;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function pagarDivida($vl){
        if($this->getSaldo() >= $vl){
            if($this->getSaldo())
               $this->devendo -= $vl;
               echo "Abatido valor </br>";
               echo "Divida atual: ". $this->devendo."</br>";
        }else{
            echo "Saldo insuficiente </br>";
        }
    }
    
    function pagar($valor){
        $this->saldo -= $valor;
    }
    
    public function getDevendo() {
        return $this->devendo;
    }

    public function setDevendo($devendo): void {
        $this->devendo += $devendo;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setCep($cep): void {
        $this->cep = $cep;
    }

    public function setRua($rua): void {
        $this->rua = $rua;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

}
