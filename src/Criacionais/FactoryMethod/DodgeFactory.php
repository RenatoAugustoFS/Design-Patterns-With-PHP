<?php

namespace App\Criacionais\FactoryMethod;

use App\Criacionais\FactoryMethod\Product\CarroProduct;
use App\Criacionais\FactoryMethod\Product\DodgeCharger;
use App\Criacionais\FactoryMethod\Product\DodgeDart;

class DodgeFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'charger') {
            return new DodgeCharger();
        } elseif ($modeloCarro == 'dart') {
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}