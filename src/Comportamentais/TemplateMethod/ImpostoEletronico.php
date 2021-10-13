<?php

namespace App\Comportamentais\TemplateMethod;

class ImpostoEletronico extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return ($precoProduto * 1.2);
    }

    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}