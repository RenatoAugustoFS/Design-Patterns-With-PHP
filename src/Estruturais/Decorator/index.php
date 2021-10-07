<?php

use App\Estruturais\Decorator\AnelDeFogo;
use App\Estruturais\Decorator\EspadaMagica;
use App\Estruturais\Decorator\Mago;

require '../../../vendor/autoload.php';

$decorator = new Mago();
$decorator = new EspadaMagica($decorator);
$decorator = new AnelDeFogo($decorator);
$decorator = new AnelDeFogo($decorator);

echo $decorator->getNome() . PHP_EOL;
echo "Ataque = {$decorator->getAtaque()}" . PHP_EOL;