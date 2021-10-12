<?php
require '../../../vendor/autoload.php';

use App\Comportamentais\Strategy\CompressaoContext;
use App\Comportamentais\Strategy\ComprimirRar;
use App\Comportamentais\Strategy\ComprimirTar;
use App\Comportamentais\Strategy\ComprimirZip;


$strategyRar = new ComprimirRar();
$strategyTar = new ComprimirTar();
$strategyZip = new ComprimirZip();

$compressaoContext = new CompressaoContext($strategyRar);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');

echo "\n";
$compressaoContext->setCompressaoStrategy($strategyZip);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');

echo "\n";
$compressaoContext->setCompressaoStrategy($strategyTar);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');