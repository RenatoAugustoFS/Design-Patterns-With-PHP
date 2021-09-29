<?php

namespace App\Criacionais\Prototype;

abstract class LivroPrototype
{
    protected string $titulo;
    protected string $assunto;
    protected string $nomeTitular;
    abstract public function __clone();

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): LivroPrototype
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAssunto(): string
    {
        return $this->assunto;
    }

    public function setAssunto(string $assunto): LivroPrototype
    {
        $this->assunto = $assunto;
        return $this;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular(string $nomeTitular): LivroPrototype
    {
        $this->nomeTitular = $nomeTitular;
        return $this;
    }
}