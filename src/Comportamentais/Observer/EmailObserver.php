<?php

namespace App\Comportamentais\Observer;

class EmailObserver implements Observer
{
    public function atualizado(string $codigo): void
    {
        $this->enviaEmailEstoqueZerado($codigo);
    }

    public function enviaEmailEstoqueZerado(string $codigoProduto): void
    {
        echo 'Email enviado para o setor de compras';
    }
}