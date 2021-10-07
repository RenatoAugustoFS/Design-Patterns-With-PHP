<?php

namespace App\Estruturais\Decorator;

abstract class Personagem
{
    protected float $ataque;
    protected string $nome;

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getAtaque(): float
    {
        return $this->ataque;
    }
}