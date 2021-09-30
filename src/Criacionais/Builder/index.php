<?php

use App\Criacionais\Builder\FabricaFoguetesDirector;
use App\Criacionais\Builder\FogueteModeloABuilder;
use App\Criacionais\Builder\FogueteModeloBBuilder;

require '../../../vendor/autoload.php';

$montadoraDeFoguetesTestI = new FabricaFoguetesDirector(new FogueteModeloABuilder());
$montadoraDeFoguetesTestII = new FabricaFoguetesDirector(new FogueteModeloBBuilder());

$montadoraDeFoguetesTestI->construirFoguete();
$fogueteA = $montadoraDeFoguetesTestI->getFoguete();
echo $fogueteA;

$montadoraDeFoguetesTestII->construirFoguete();
$fogueteB = $montadoraDeFoguetesTestII->getFoguete();
echo $fogueteB;