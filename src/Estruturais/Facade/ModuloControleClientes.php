<?php

namespace App\Estruturais\Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpf): array
    {
        //simula a busca de um cliente por cpf
        return [
          'nome' => 'Renato Augusto',
          'cpf' => '123456789',
          'email' => 'renato@gmail.com',
        ];
    }
}