<?php

require './conn_pdo.php';

$var = 'IFOOD3';

$sql = "Update tb_cadconexao_integrador set nome_empresa = '$var' where id = 5";


$valor = $pdo->prepare($sql);

$valor->execute();