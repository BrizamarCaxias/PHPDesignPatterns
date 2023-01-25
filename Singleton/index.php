<?php

$instancia = LogsSingleton::obterInstancia();
$novaInstancia = LogsSingleton::obterInstancia();

if($instancia === $novaInstancia){
    echo 'As instâncias são extamente as mesmas!';
}

