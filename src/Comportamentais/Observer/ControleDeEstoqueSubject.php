<?php

namespace App\Comportamentais\Observer;

class ControleDeEstoqueSubject
{
    private array $observers;

    public function atualizaEstoqueProduto(string $codigoProduto, int $novaQuantidade): bool
    {
        if ($novaQuantidade == 0) {
            $this->notificarObservers($codigoProduto);
            return true;
        }

        return false;
    }

    public function adicionarObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removerObserver(Observer $observerRemover): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
            unset($this->observers[$index]);
            return true;
            }
        }

        return false;
    }

    public function notificarObservers(string $codigoProduto): void
    {
        foreach ($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}