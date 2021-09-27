<?php

require '../../../vendor/autoload.php';

use App\Criacionais\Singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();
$novaInstancia = LogsSingleton::obterInstancia();

if ($instancia === $novaInstancia) {
    echo "as duas instâncias são iguais";
}

$arrayExemplo = ['nome' => 'Renato Augusto', 'idade' => 27];
$instancia->gravarLogs($arrayExemplo);
