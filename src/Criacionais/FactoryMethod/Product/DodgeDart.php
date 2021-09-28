<?php

namespace App\Criacionais\FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar(): void
    {
        echo 'DodgeDart Acelerando';
    }

    public function frear(): void
    {
        echo 'DodgeDart Freando';
    }

    public function trocarMarcha(): void
    {
        echo 'DodgeDart trocando marcha';
    }
}