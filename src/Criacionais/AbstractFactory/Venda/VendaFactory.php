<?php

namespace App\Criacionais\AbstractFactory\Venda;

use App\Criacionais\AbstractFactory\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
