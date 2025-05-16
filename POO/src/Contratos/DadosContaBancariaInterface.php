<?php 

namespace POO\Contratos;

interface DadosContaBancariaInterface
{

    public function getBanco(): string;
    public function getNomeTitular(): string;
    public function getAgencia(): string;
    
    
}