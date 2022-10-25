<?php
require_once 'classes/Carrinho.php';
require_once 'classes/Cliente.php';
require_once 'classes/Vendedor.php';
class Caixa {
    
    private $formaPgt;
    
    public function __construct($cliente, $vendedor, $carrinho, $formPgt) {
        
        if($formPgt == "A vista"){
            if($cliente->getSaldo() >= $carrinho->getValorCarrinho()){
                //Proxima linha é para diminuir valor da compra ao valor que o cliente possui atualmente
                $cliente->pagar($carrinho->getValorCarrinho());
                echo "Conta paga, Obrigado por Comprar. Volte sempre</br>";
                $vendedor->bonusVenda();
            } else{
                $cliente->setDevendo($carrinho->getValorCarrinho());
                echo "Saldo insuficiente!!</br>";
                echo "Adicionado ".$carrinho->getValorCarrinho()." a divida do cliente</br>";
                echo "Divida atual: ".$cliente->getDevendo()."</br>";
            }
        }else{
            $cliente->setDevendo($carrinho->getValorCarrinho());
            echo "Adicionado ".$carrinho->getValorCarrinho()." a divida do cliente</br>";
            echo "Divida atual: ".$cliente->getDevendo()."</br>";
        }
    }
    
    public function getFormaPgt() {
        return $this->formaPgt;
    }

    public function setFormaPgt($formaPgt): void {
        $this->formaPgt = $formaPgt;
    }
}
