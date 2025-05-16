<?php 

namespace Estudo\Contratos;

interface OperacaoContaBancariaInterface
{

    public function depositar(float $valor): string;
    public function sacar(float $valor): string;
    public function obterSaldo(): string;

}