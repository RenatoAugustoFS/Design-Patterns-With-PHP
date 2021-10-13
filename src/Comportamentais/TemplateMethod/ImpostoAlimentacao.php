<?php

namespace App\Comportamentais\TemplateMethod;

class ImpostoAlimentacao extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto;
    }
}