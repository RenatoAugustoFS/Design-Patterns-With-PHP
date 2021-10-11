<?php

namespace App\Comportamentais\Observer;

interface Subject
{
    public function adicionarObserver(Observer $observer): void;
    public function removerObserver(Observer $observer): bool;
    public function notificarObservers(string $codigoProduto): void;
}