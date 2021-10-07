<?php

namespace App\Comportamentais\Memento;

class Texto
{
    protected string $texto;
    protected TextoCareTaker $textoCareTaker;

    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = '';
    }

    public function escreverTexto(string $texto): void
    {
        $this->textoCareTaker->adicionarMemento(
            new TextoMemento($this->texto)
        );

        $this->texto .= $texto . ' ';
    }

    public function desfazerEscrita(): void
    {
        $this->texto = $this
            ->textoCareTaker
            ->retornarUltimoEstadoSalvo()
            ->getTexto();
    }

    public function retornarTexto(): string
    {
        return $this->texto;
    }
}