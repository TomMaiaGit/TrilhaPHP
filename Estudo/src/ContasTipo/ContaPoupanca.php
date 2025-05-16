
<?php

//namespace Estudo;

use Estudo\ContaBancaria;

class ContaPoupanca extends ContaBancaria{

    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    private string $banco;
    private string $nomeTitular;
    private string $agencia;
    private float $saldo;

    // Construtor da classe conta corrente
    public function __construct(string $banco, string $nomeTitular, string $agencia, float $saldo) {
     //Como a classe é herdada de ContaBancaria não precisa iniciar os atributos como
        //fizemos na classe pai ($this->banco = $banco), basta chamar a palavra reservada 
        //parente:: e o construtor da classe pai, passando os atributos
        parent::__construct($banco, $nomeTitular, $agencia, $saldo);
    }

    //Classe abstrata na clase pai
    public function obterSaldo() : string{
        return 'Seu saldo atual é: R$'.number_format( ($this->saldo + ($this->saldo * self::RENDIMENTO ) )  );
    }
    

}
