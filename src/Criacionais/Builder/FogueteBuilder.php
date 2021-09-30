<?php

namespace App\Criacionais\Builder;

abstract class FogueteBuilder
{
    protected FogueteDTO $foguete;

    public function __construct()
    {
        $this->foguete = new FogueteDTO();
    }

    public function getFoguete(): FogueteDTO
    {
        return $this->foguete;
    }

    abstract public function buildTanqueCombustivel(): void;
    abstract public function buildModelo(): void;
    abstract public function buildMotores(): void;
    abstract public function buildNumeroLugares(): void;
}