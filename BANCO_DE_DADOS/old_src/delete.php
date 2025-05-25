<?php

require './conn_pdo.php';

$sql = "delete from tb_cadconexao_integrador where nome_empresa = 'IFOOD3' ";

$delete = $pdo->prepare($sql);

$delete->execute();

$delete->rowCount();
 