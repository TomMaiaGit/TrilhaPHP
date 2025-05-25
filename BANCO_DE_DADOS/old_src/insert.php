<?php

require './conn_pdo.php';

//$sql = "insert into tb_cadconexao_integrador (nome_empresa, dados_conexao, dados_de_para, guid) values ('IFOOD', 'teste', 'ok', 'asdlnoq34')";
//$prepare = $pdo->prepare($sql);
//$prepare->execute();

//$prepare->bindParam(1, $_GET['nome_empresa']);

$sql = "insert into tb_cadconexao_integrador (nome_empresa, dados_conexao, dados_de_para, guid) values (?, ?, ?, ?)";

$prepare = $pdo->prepare($sql);

$prepare->execute([
     'ANOTAI',
    'teste',
    'ok',
    'da324sad']);
   

echo $prepare->rowCount();
