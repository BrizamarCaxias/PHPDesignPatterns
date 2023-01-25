<?php
namespace Singleton;

class LogsSingleton{

    protected static $instancia;

    public function gravarLog(array $dados){

        $nomeArquivo = 'logs.txt';

        $logsAnteriores =[];

        if(filesize($nomeArquivo) > 0){
            $conteudoDoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriores = json_decode($conteudoDoArquivo);

        }

        $logsAnteriores[] = $dados;
        $arquivo = fopen($nomeArquivo,'w');
        fwrite($arquivo,json_encode($logsAnteriores));
        fclose($arquivo);

    }

    
}

