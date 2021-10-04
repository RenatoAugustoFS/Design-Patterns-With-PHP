<?php

namespace App\Estruturais\Adapter;

class IntegracaoErpAdapter implements IErpAdapter
{
    private IntegracaoErpLegado $integracaoErp;

    public function __construct(IntegracaoErpLegado $integracaoErp)
    {

        $this->integracaoErp = $integracaoErp;
    }

    public function gerarToken(string $apiKey, string $usuario): string
    {
        return $this->integracaoErp->token($apiKey);
    }

    public function enviarPedido(Pedido $pedido, string $token): bool
    {
        $pedidoConvertidoArray = [
            'valorTotal' => $pedido->recuperaValorTotal(),
            'codigo' => $pedido->recuperaCodigo(),
        ];
        foreach ($pedido->recuperaProdutos() as $produto) {
            $pedidoConvertidoArray['produtos'][] = $produto;
        }

        return $this->integracaoErp->pedido($pedidoConvertidoArray, $token);
    }
}