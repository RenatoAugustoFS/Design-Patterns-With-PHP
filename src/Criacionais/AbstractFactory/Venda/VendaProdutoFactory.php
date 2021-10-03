<?php

namespace App\Criacionais\AbstractFactory\Venda;

use App\Criacionais\AbstractFactory\Impostos\Imposto;
use App\Criacionais\AbstractFactory\Impostos;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new Impostos\Icms();
    }
}
