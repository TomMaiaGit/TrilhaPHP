<?php
declare(strict_types=1);

namespace POO;

use POO\Contratos\DadosContaBancariaInterface;
use POO\Contratos\OperacaoContaBancariaInterface;

//Como existe um metodo abstrato dentro da classe então a classe tambem deve ser
abstract class ContaBancaria implements DadosContaBancariaInterface, OperacaoContaBancariaInterface
{

    protected string $banco;
    protected string $nomeTitular;
    protected string $agencia;
    protected float $saldo;

    // Construtor da classe
    public function __construct(string $banco, string $nomeTitular, string $agencia, float $saldo) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string{
        $this->saldo += $valor;
        return 'Depositar de R$'.number_format( $valor, 2 , ',' , '' ).' realizado';
    }

    public function sacar (float $valor): string{
        $this->saldo -= $valor;
        return 'Saque  de R$'.number_format( $valor , 2 , ',' , '' ).' realizado';
    }

    /* public function exibirDados(): array {
        return [
            'banco' => $this->banco,
            //'nomeTitular' => $this->nomeTitular,
            //'agecia' => $this->agencia,
            //'saldo'=> $this->saldo
        ];
    }
    */
    //método abstract não necessita de implementação na prórpia classe
    //apenas nas classes filhas que herda ContaBancaria.
    public abstract function obterSaldo(): string;



    //metodo para setar um valor ao atributo que esta encapsulado como privado
    public function setBanco(string $banco): void{
        $this->banco = $banco;
    }
    //metodo que permite acessar o valor contido no atributo banco da classe ContaBancaria
    public function getBanco(): string{
        return $this->banco;
    }
    
    public function getNomeTitular(): string{
        return $this->nomeTitular;
    }
    public function getAgencia(): string {
        return $this->agencia;
    }
    

}

