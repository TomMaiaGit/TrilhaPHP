<?php

/*
Desafio
Leia dois valores inteiros identificados como variáveis A e B. Calcule a soma entre elas e chame essa variável de SOMA.
A seguir escreva o valor desta variável.

Entrada
O arquivo de entrada contém 2 valores inteiros.

Saída
Imprima a variável SOMA com todas as letras maiúsculas, inserindo um espaço em branco antes e depois do símbolo de igualdade, seguido pelo valor correspondente à soma de A e B.

Exemplos de Entrada	
30
10

Exemplos de Saída
SOMA = 40

*/

  $a = (int) fgets(STDIN);
  $b = (int) fgets(STDIN);


  $soma = $a + $b;
 
  echo "Soma = $soma\n";
?>
