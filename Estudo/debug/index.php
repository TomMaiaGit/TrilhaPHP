<?php

require __DIR__ .'/../vendor/autoload.php';


use Estudo\ContaBancaria;

$conta = new ContaBancaria();
$conta->setBanco("Santander");

var_dump($conta->getBanco());


