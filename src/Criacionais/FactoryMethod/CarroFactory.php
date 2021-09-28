<?php

namespace App\Criacionais\FactoryMethod;

use App\Criacionais\FactoryMethod\Product\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}