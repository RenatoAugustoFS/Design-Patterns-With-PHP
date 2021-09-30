<?php

namespace App\Criacionais\Builder;

class FogueteModeloBBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setLitrosCombustivel(850);
    }

    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete Modelo II');
    }

    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(2);
    }

    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(6);
    }
}