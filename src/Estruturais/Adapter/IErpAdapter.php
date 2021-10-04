<?php

namespace App\Estruturais\Adapter;

interface IErpAdapter
{
    public function gerarToken(string $apiKey, string $usuario): string;

    public function enviarPedido(Pedido $pedido, string $token): bool;
}