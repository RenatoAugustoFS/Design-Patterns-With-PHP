<?php

namespace App\Criacionais\AbstractFactory\Venda;

use App\Criacionais\AbstractFactory\Impostos\Imposto;
use App\Criacionais\AbstractFactory\Impostos\Iss;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}
