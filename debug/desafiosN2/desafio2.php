<?php
  
  /*
    Desafio
Leia um número inteiro que representa um código de DDD para discagem interurbana. Em seguida, informe à qual cidade o DDD pertence, considerando a tabela abaixo:
https://prnt.sc/nhChqm20kDdH

Se a entrada for qualquer outro DDD que não esteja presente na tabela acima, o programa deverá informar:
DDD não cadastrado

Entrada
A entrada consiste de um único valor inteiro.

Saída
Imprima o nome da cidade correspondente ao DDD existente na entrada. Imprima DDD não cadastrado caso não existir DDD correspondente ao número digitado.

Exemplo de Entrada	
11

Exemplo de Saída
São Paulo

  */
  
$ddd = fgets(STDIN);

if($ddd == 61){
    echo "Brasilia\n";
    
}else if($ddd == 71){


    echo "Salvador\n";

}else if($ddd == 11){
    echo "Sao Paulo\n";
    
}else if($ddd == 21){
    echo "Rio de Janeiro\n";
    
}else if($ddd == 32){
    echo "Juiz de Fora\n";
    
}else if($ddd == 19){
    echo "Campinas\n";
    
}else if($ddd == 27){
    echo "Vitoria\n";
    
}else if($ddd == 31){
    echo "Belo Horizonte\n";
    
}else{
    echo "DDD nao cadastrado\n";
}
?>