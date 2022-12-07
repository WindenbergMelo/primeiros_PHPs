<?php
require_once 'classes/Produto.php';
require_once 'classes/Vendedor.php';
class Carrinho {
    
    private $produto;
    private $valorCarrinho;
    private $qtdPro;
    
    function addCarrinho(){ 
        
        //argumentos enviados pelo cliente, independente da quantidade ou tipo
        $argumentos = func_get_args();
        //quantidade de argumentos enviados pelo cliente
        $quantidade = func_num_args();
        //na proxima linha está sendo adicionado os argumentos na variavel produto pra serem usados fora da função addcarrinho
        $this->setProduto($argumentos);
        //na proxima está sendo feito o mesmo que a de cima, mas para quantidade dos argumentos
        $this->setQtdPro($quantidade);
        
        /*O for vai adicionar dois, pois o primeiro argumento é 
        o produto e o segundo é a quantidade que o cliente deseja. Então  
        $p é o produto e o $q é a quantidade dele */        
        for ($p=0;$p<$quantidade; $p+=2){
            if($p%2 == 0){
                $q = $p+1;
                //Nesse if vai verificar a quantidade do produto no estoque
                if($argumentos[$q]<=$argumentos[$p]->getQtdEstoque()){
                    echo "O produto ".$argumentos[$p]->getNome()." foi adicionado ao carrinho.</br>";
                    //função para diminuir a quantidade de produtos no estoque já que foi comprado
                    $argumentos[$p]->prodComprado($argumentos[$q]);
                    /*Nessa parte vai ser feito a multiplicação da quantidade dos produtos
                    pedidos pelo cliente e o valor dele, depois armazenado no valor total*/
                    $valorProCompra = $argumentos[$q]*$argumentos[$p]->getValor();
                    $this->setValorCarrinho($valorProCompra); 
                } else {
                    echo "O produto ".$argumentos[$p]->getNome()." não foi add pois excedeu a quantidade no estoque</br>";
                }
            }   
        }echo "</br>";
        
    }
    
    function NotaFiscal(){
        
        echo "<h3><strong>Nota Fiscal</strong></h3>";
        /*O for vai adicionar dois, pois o primeiro argumento é 
        o produto e o segundo é a quantidade que o cliente deseja. Então  
        $n é o produto e o $m é a quantidade dele */
        for ($n=0;$n< $this->getQtdPro(); $n+=2){
                $m = $n+1;
                    echo $this->produto[$m]." ".$this->produto[$n]->getNome().": Valor UNI | ".$this->produto[$n]->getValor()." |</br>";               
        }   
        //Agora armazenar os produtos dentro do setProdutos para usar fora da função carrinho  
        echo "</br>O valor total da compra é: |". $this->getValorCarrinho()." |</br>";
        
    }
    
    public function getProduto() {
        return $this->Produto;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setProduto($produto): void {
        $this->produto = $produto;
    }

    public function setValor($valor): void {
        $this->valor = $valor;
    }

    public function getValorCarrinho() {
        return $this->valorCarrinho;
    }

    public function setValorCarrinho($valorCarrinho): void {
        $this->valorCarrinho += $valorCarrinho;
    }
    
    public function getQtdPro() {
        return $this->qtdPro;
    }

    public function setQtdPro($qtdPro): void {
        $this->qtdPro = $qtdPro;
    }

}
