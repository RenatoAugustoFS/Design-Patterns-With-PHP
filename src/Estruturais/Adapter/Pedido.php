<?php

namespace App\Estruturais\Adapter;

class Pedido
{
    protected string $numeroPedido;
    protected float $valorPedido;
    protected array $produtos;

    public function addProduto(string $produto): Pedido
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function recuperaValorTotal(): float
    {
        return 100;
    }

    public function recuperaCodigo(): float
    {
        return 123456;
    }

    public function recuperaProdutos(): array
    {
        return $this->produtos;
    }
}