<?php

namespace App\Criacionais\FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar(): void
    {
        echo 'Tesla X Acelerando';
    }

    public function frear(): void
    {
        echo 'Tesla X Freando';
    }

    public function trocarMarcha(): void
    {
        echo 'Tesla X trocando marcha';
    }
}