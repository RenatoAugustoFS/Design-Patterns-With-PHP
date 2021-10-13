<?php

namespace App\Comportamentais\TemplateMethod;

class ImpostoVestuario extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return ($precoProduto * 1.15);
    }
}