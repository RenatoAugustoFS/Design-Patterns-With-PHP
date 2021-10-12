<?php

namespace App\Comportamentais\Strategy;

class ComprimirZip extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".ZIP"';
        return true;
    }
}