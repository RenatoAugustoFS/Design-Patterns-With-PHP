<?php

namespace App\Estruturais\Decorator;

class Cavaleiro extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Cavaleiro';
        $this->ataque = 13;
    }
}