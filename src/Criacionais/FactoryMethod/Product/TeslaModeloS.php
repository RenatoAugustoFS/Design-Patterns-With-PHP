<?php

namespace App\Criacionais\FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar(): void
    {
        echo 'Tesla S Acelerando \n';
    }

    public function frear(): void
    {
        echo 'Tesla S Freando \n';
    }

    public function trocarMarcha(): void
    {
        echo 'Tesla S trocando marcha \n';
    }
}