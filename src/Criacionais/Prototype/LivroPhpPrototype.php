<?php

namespace App\Criacionais\Prototype;

class LivroPhpPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setAssunto('PHP');
    }

    public function __clone()
    {
        echo "Livro clonado";
    }
}