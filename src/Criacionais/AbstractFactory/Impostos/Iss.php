<?php

namespace App\Criacionais\AbstractFactory\Impostos;

Class Iss extends Imposto
{
    public function realizaCalculoEspecifico(int $orcamento): float
    {
        return $orcamento * 0.06;
    }
}