<?php

use App\Estruturais\Adapter\IntegracaoErpAdapter;
use App\Estruturais\Adapter\IntegracaoErpLegado;
use App\Estruturais\Adapter\Pedido;

require '../../../vendor/autoload.php';

$integracaoLegada = new IntegracaoErpLegado();
$integracaoErpAdapter = new IntegracaoErpAdapter($integracaoLegada);

$token = $integracaoErpAdapter->gerarToken('123456', 'Renato Augusto');
$pedidoTeste = new Pedido();
$pedidoTeste->addProduto('Iphone X');
$pedidoTeste->addProduto('Carregador Iphone X');

if ($integracaoErpAdapter->enviarPedido($pedidoTeste, $token)) {
    echo 'Pedido enviado com suscesso';
}
