<?php

require __DIR__ . '/../vendor/autoload.php';

use POO\ContasTipo\ContaPoupanca;
use POO\Contratos\DadosContaBancariaInterface;
use POO\Contratos\OperacaoContaBancariaInterface;

function executarOperacoes(OperacaoContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getAgencia();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaPoupanca(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    0 // saldo
);

exibirDados($conta);
executarOperacoes($conta);