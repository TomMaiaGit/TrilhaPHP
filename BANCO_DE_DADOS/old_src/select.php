<?php

require './conn_pdo.php';

$sql = 'Select * from TB_CADCONEXAO_INTEGRADOR';
foreach ( $pdo->query($sql) as $sql ){
    echo $sql ['NOME_EMPRESA'] . "\t";

   // var_dump( $pdo->query($sql['NOME_EMPRESA'] ) ) ;
}
//var_dump( $pdo->query($sql) ) ;