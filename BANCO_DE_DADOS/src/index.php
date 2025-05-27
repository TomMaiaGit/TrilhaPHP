<?php

declare (strict_types=1);

require './produto.php';

$produto = new Produto();

//var_dump($produto->list()) ;

switch ($_GET['operacao']){

    case 'list' :
        echo "<h3> PRODUTOS </h3>";
         foreach ($produto->list() as $value){
                echo 'Id: '. $value['id'] . '<br> Descrição: '. $value['nome'] . '<hr>';

        }
        break;

    case 'insert':

       echo ( $produto->insert('Bootcamp Spring') );

        break;

    case 'update':
        $produto->update('Mini curso UX', 2);

        break;

    case 'delete':
        $produto->delete(2);

        break;
   
}