<?php

namespace App\Criacionais\AbstractFactory\Impostos;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(int $orcamento): float;

    public function calculaImposto(int $orcamento): float
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoDeOutroImposto($orcamento);
    }

    private function realizaCalculoDeOutroImposto(int $orcamento): float
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}