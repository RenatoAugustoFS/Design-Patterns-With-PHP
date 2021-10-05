<?php

namespace App\Estruturais\Facade;

class ModuloControleEstoque
{
    public function registraRetirada(string $codigoLivro, int $cpfCliente): bool
    {
        //Efetua o registro da retirada
        return true;
    }

    public function validaEstoque(): bool
    {
        //... Valida se possui estoque
        echo "Registro de retirada efetuado com sucesso";
        return true;
    }
}