<?php

require './conn_pdo.php';

$var = 'IFOOD3';

$sql = "Update tb_cadconexao_integrador set nome_empresa = '$var' where id = 5";

//Com BindParam enviando os dados por URL
$sqlBind = "Update tb_cadconexao_integrador set nome_empresa = ? where id = 6";

$valor = $pdo->prepare($sql);

//Preparando Bind
$valorBind = $pdo->prepare($sqlBind);

//Com BILD PARAM []
$valorBind->bindParam(1 , $_GET ['nome_empresa']);
//Valor do que foi enviado : na URL
// http://localhost:4000/BANCO_DE_DADOS/old_src/update.php?nome_empresa=RAPPI

//$valor->execute();

//Alterando o valor com os dados do paramentro URL
$valorBind->execute();