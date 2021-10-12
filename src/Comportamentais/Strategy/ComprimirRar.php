<?php

namespace App\Comportamentais\Strategy;

class ComprimirRar extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".RAR"';
        return true;
    }
}