<?php

use App\Criacionais\Prototype\LivroPhpPrototype;

require "../../../vendor/autoload.php";

$compradores = [
    'Gabriel Anhaia',
    'Anderson Scherer',
    'Braian Ottoni'
];

$livroPhp = new LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de projeto em PHP 7.4');

$livros = [];

foreach ($compradores as $nomeComprador){
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($nomeComprador);
    $livros[] = $livroComprador;
}

print_r($livros);