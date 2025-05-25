<?php

declare (strict_types=1);

class Produto{

    private $conexao;

    public function __construct(){

        try{
            $this->conexao = new PDO('sqlsrv:Server=localhost;Database=Loja', 'sa', 'H@!fa123');
        }catch(Exception $e){
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function list(){
        return true;
    }

}