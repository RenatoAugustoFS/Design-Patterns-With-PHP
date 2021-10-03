<?php

namespace App\Criacionais\AbstractFactory\Impostos;

Class Icms extends Imposto
{
    public function realizaCalculoEspecifico(int $orcamento): float
    {
        return $orcamento * 0.1;
    }
}