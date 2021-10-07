<?php

namespace App\Estruturais\Decorator;

class Mago extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Mago';
        $this->ataque = 10;
    }
}