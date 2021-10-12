<?php

namespace App\Comportamentais\Strategy;

class ComprimirTar extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".TAR"';
        return true;
    }
}