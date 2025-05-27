<?php

declare(strict_types=1);


$pdo = require 'connect.php';
$sql = 'select * from TB_CADPRODU';

echo '<h3> Produtos: </h3>';

foreach ($pdo->query($sql) as $key => $value){
    echo 'Id: '. $value['PRO_CDPROD'] . '<br> Descrição: '. $value['PRO_NMPROD'] . '<hr>';
}