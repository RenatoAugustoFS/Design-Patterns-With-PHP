<?php

namespace App\Criacionais\Builder;

class FogueteDTO
{
    protected float $tanqueCombustivel;
    protected string $modelo;
    protected int $numeroMotores;
    protected int $numeroLugares;

    public function __toString(): string
    {
        $result = "Foguete model: {$this->getModelo()}\n";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n";
        $result .= "Número de motores: {$this->getNumeroMotores()}\n";
        $result .= "Número de lugares: {$this->getNumeroLugares()
        }\n";
        return $result;
    }

    public function getLitrosCombustivel(): float
    {
        return $this->tanqueCombustivel;
    }

    public function setLitrosCombustivel(float $tanqueCombustivel): FogueteDTO
    {
        $this->tanqueCombustivel = $tanqueCombustivel;
        return $this;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): FogueteDTO
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getNumeroMotores(): int
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): FogueteDTO
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares(): int
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): FogueteDTO
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}