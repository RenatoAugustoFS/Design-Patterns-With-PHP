<?php

namespace App\Comportamentais\Observer;

interface Observer
{
    public function atualizado(string $codigo): void;
}