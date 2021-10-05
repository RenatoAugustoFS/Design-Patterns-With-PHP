<?php

namespace App\Estruturais\Facade;

class ModuloEmail
{
    public function validaServidorDeEmails(): bool
    {
        // Valida se servidor está ok
        return true;
    }

    public function enviaMensagem(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ): bool {
    // Simula envio de mensagem de email.
        echo "Email enviado com sucesso.\n";
        return true;
    }
}