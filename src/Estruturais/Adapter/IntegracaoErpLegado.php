<?php

namespace App\Estruturais\Adapter;

class IntegracaoErpLegado
{
    public function token($apiKey): string
    {
        //código de solicitação do token aqui
        return 'TOKEN GERADO';   
    }

    public function pedido($pedido, $apiKey): bool
    {
        //código que envia o pedido
        return true;
    }
}