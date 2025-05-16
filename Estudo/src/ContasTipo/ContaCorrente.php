<?php

namespace Estudo\ContasTipo;

use Estudo\ContaBancaria;

class ContaCorrente extends ContaBancaria{

    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    // Construtor da classe conta corrente
    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $agencia, 
        float $saldo ) 
    {   //Como a classe é herdada de ContaBancaria não precisa iniciar os atributos como
        //fizemos na classe pai ($this->banco = $banco), basta chamar a palavra reservada 
        //parente:: e o construtor da classe pai, passando os atributos
        parent::__construct($banco, $nomeTitular, $agencia, $saldo);
    }

    //Classe abstrata na clase pai
    public function obterSaldo() : string
    {
        return 'Seu saldo atual é: R$'.number_format( ($this->saldo - self::TAXA ), 2 , ',' , '' );
    }
    


}
