<?php

use App\Criacionais\FactoryMethod\TeslaFactory;

require "../../../vendor/autoload.php";

$teslaFactory = new TeslaFactory();
$teslaX = $teslaFactory->criarCarro('modelo_x');

$teslaX->acelerar();
$teslaX->frear();
