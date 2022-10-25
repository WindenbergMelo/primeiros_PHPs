<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require_once 'classes/Cliente.php';
            require_once 'classes/Vendedor.php';
            require_once 'classes/Produto.php';
            require_once 'classes/Carrinho.php';
            require_once './classes/Caixa.php';
            
            $produto[0] = new Produto(/*nome*/"Macarrao",/*valor*/2.50,/*quantidade*/ 15,/*codigo de barra*/ 2002);
            $produto[1] = new Produto("Arroz", 3.00, 20, 2003);
            $produto[2] = new Produto("Feijão", 3.50, 20, 2004);
            
            $vendedor[0] = new Vendedor(/*nome*/"Bibi", /*cpf*/2345, /*salario*/50.8);
            $cliente[0] = new Cliente(/*nome*/"Berg", /*cpf*/1234, /*cep*/39535000,/*rua*/ "pico do cabugi",/*numero*/ 264, /*saldo*/50);   
            
            $carrinho[0] = new Carrinho();
            
            $carrinho[0]->addCarrinho($produto[0], 10, $produto[1], 4, $produto[2], 5);
            
            $carrinho[0]->NotaFiscal();
            
            $caixa[0] = new Caixa($cliente[0], $vendedor[0], $carrinho[0], "A vista");
            
            $cliente[0]->pagarDivida(50);
            
        ?>
    </body>
</html>
