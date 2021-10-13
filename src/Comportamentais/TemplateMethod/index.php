<?php

use App\Comportamentais\TemplateMethod\ImpostoAlimentacao;
use App\Comportamentais\TemplateMethod\ImpostoEletronico;
use App\Comportamentais\TemplateMethod\ImpostoVestuario;

require '../../../vendor/autoload.php';

$impostosAlimentacao = new ImpostoAlimentacao();
$impostosVestuario = new ImpostoVestuario();
$impostosEletronicos = new ImpostoEletronico();

echo "Preço final de alimentação: " . $impostosAlimentacao->calculaImpostosProduto(10);
echo "\n";
echo "Preço final de vestuário: " . $impostosVestuario->calculaImpostosProduto(10);
echo "\n";
echo "Preço final de eletrônicos: " . $impostosEletronicos->calculaImpostosProduto(10);
echo "\n";