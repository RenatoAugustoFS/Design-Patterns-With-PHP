<?php

namespace App\Comportamentais\Observer;

class ControleRequisicoesDeCompraObserver implements Observer
{
    public function atualizado(string $codigo): void
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    public function adicionaListaRequisicaoCompra(string $codigoProduto): void
    {
        echo 'Produto adicionado à lista de requisições de compra';
    }
}