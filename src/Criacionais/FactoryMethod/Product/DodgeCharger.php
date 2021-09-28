<?php

namespace App\Criacionais\FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
    public function acelerar(): void
    {
        echo 'DodgeCharge Acelerando';
    }

    public function frear(): void
    {
        echo 'DodgeCharge Freando';
    }

    public function trocarMarcha(): void
    {
        echo 'DodgeCharge trocando marcha';
    }
}