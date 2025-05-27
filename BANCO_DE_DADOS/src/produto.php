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

    public function list(): array{
        //return true;

        $sql = "select * from PRODUTO";
        $produto = [];

        foreach ($this->conexao->query($sql) as $key => $value){
               // echo 'Id: '. $value['ID'] . '<br> Descrição: '. $value['NOME_EMPRESA'] . '<hr>';
            array_push($produto, $value);
        }
        return $produto;
    }

    public function insert(string $nome ):int {
        
        $sql = 'insert into PRODUTO (nome) values (?)';

        $prepare = $this->conexao->prepare($sql);
        //$prepare->bindParam(1,$nome);
        $prepare->execute([$nome]);

        return $prepare->rowCount();

    }

    /***
     * Exemplo com metodo insert dinâmico com array associativo
     
     public function insert($tabela, $dados) {
            // Extrai colunas e valores do array associativo
            $colunas = implode(", ", array_keys($dados));
            $placeholders = implode(", ", array_fill(0, count($dados), "?"));

            // Monta dinamicamente a query SQL
            $sql = "INSERT INTO {$tabela} ({$colunas}) VALUES ({$placeholders})";

            $prepare = $this->conexao->prepare($sql);
            
            $prepare->execute(array_values($dados));
        }

     ***/


    public function update(string $nome, int $id): int{
        
        //Com BindParam enviando os dados por URL
        $sql = "Update PRODUTO set nome = ? where id = ?";

        $valor = $this->conexao->prepare($sql);
        $valor->execute([$nome, $id]);

        return $valor->rowCount();
    }

    public function delete(int $id): int{
        
        $sql = "delete from produto where id = ? ";

        $delete = $this->conexao->prepare($sql);

        $delete->execute([$id]);

        return $delete->rowCount();

    }

}