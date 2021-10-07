<?php

use App\Comportamentais\Memento\Texto;

require '../../../vendor/autoload.php';

$texto = new Texto();
$texto->escreverTexto('Estou escrevendo um texto');
$texto->escreverTexto('mas não é um poema');

echo $texto->retornarTexto();

$texto->desfazerEscrita();
echo $texto->retornarTexto();