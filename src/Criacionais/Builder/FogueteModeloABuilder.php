<?php

namespace App\Criacionais\Builder;

class FogueteModeloABuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setLitrosCombustivel(1000);
    }
    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete Modelo I');
    }
    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(3);
    }
    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(8);
    }
}