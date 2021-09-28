<?php

namespace App\Criacionais\Singleton;

class LogsSingleton
{
    private static LogsSingleton $instancia;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public function gravarLogs(array $dados): void
    {
        $nomeArquivo = 'logs.txt';

        $logsAnteriores	= [];
        if(filesize($nomeArquivo) > 0){
            $conteudoDoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriores	= json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $dados;
        $arquivo = fopen($nomeArquivo, 'w');
        fwrite($arquivo, json_encode($logsAnteriores));
        fclose($arquivo);
    }

    public static function obterInstancia(): self
    {
        if (empty(self::$instancia)){
            self::$instancia = new self();
        }

        return self::$instancia;
    }
}