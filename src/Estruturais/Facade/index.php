<?php

use App\Estruturais\Facade\BibliotecaFacade;

require_once('../autoloader.php');

$bibliotecaFacade = new BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '12345678998';

$efetuouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {
    $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente
        , 'CHAVE_API', 'SENHA_API');
}