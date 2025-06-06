<?php
 
 /*
    Desafio
Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.

Entrada
O arquivo de entrada contém um valor de ponto flutuante N (0 ≤ N ≤ 1000000.00).

Saída
Imprima a quantidade mínima de notas e moedas necessárias para trocar o valor inicial, conforme exemplo fornecido.

Obs: Utilize ponto (.) para separar a parte decimal.

Exemplo de Entrada	
576.73

Exemplo de Saída
NOTAS:
5 nota(s) de R$ 100.00
1 nota(s) de R$ 50.00
1 nota(s) de R$ 20.00
0 nota(s) de R$ 10.00
1 nota(s) de R$ 5.00
0 nota(s) de R$ 2.00
MOEDAS:
1 moeda(s) de R$ 1.00
1 moeda(s) de R$ 0.50
0 moeda(s) de R$ 0.25
2 moeda(s) de R$ 0.10
0 moeda(s) de R$ 0.05
3 moeda(s) de R$ 0.01
 */

$valor = fgets(STDIN) * 100;
$notas = array(0, 0, 0, 0, 0, 0);
$moedas = array(0, 0, 0, 0, 0, 0);

while($valor != 0) {
    switch($valor) {
        case $valor >= 10000:
            $notas[0] = intval($valor / 10000);
            $valor %= 10000;
            break;
        case $valor >= 5000:
            
            $notas[1] = intval($valor / 5000);
            $valor %= 5000;
            break;
        case $valor >= 2000:
            $notas[2] = intval($valor / 2000);
            $valor %= 2000;
            break;
        case $valor >= 1000:
            $notas[3] = intval($valor / 1000);
            $valor %= 1000;
            break;
        case $valor >= 500:
            $notas[4] = intval($valor / 500);
            $valor %= 500;
            break;
        case $valor>=200:
            $notas[5] = intval($valor / 200);
            $valor %= 200;
            break;
        case $valor>=100:
            $moedas[0] = intval($valor / 100);
            $valor %= 100;
            break;
        case $valor>=50:
            $moedas[1] = intval($valor / 50);
            $valor %= 50;
            break;
        case $valor>=25:
            $moedas[2] = intval($valor / 25);
            $valor %= 25;
            break;
        case $valor>=10:
            $moedas[3] = intval($valor / 10);
            $valor %= 10;
            break;
        case $valor>=5:
            $moedas[4] = intval($valor / 5);
            $valor %= 5;
            break;
        case $valor>=1:
            $moedas[5] = intval($valor / 1);
            $valor %= 1;
            break;
    }
}

echo "NOTAS:\n";
echo $notas[0] . " nota(s) de R$ 100.00\n";
echo $notas[1] . " nota(s) de R$ 50.00\n";
echo $notas[2] . " nota(s) de R$ 20.00\n";
echo $notas[3] . " nota(s) de R$ 10.00\n";
echo $notas[4] . " nota(s) de R$ 5.00\n";
echo $notas[5] . " nota(s) de R$ 2.00\n";


echo "MOEDAS:\n";
echo $moedas[0] . " moeda(s) de R$ 1.00\n";
echo $moedas[1] . " moeda(s) de R$ 0.50\n";
echo $moedas[2] . " moeda(s) de R$ 0.25\n";
echo $moedas[3] . " moeda(s) de R$ 0.10\n";
echo $moedas[4] . " moeda(s) de R$ 0.05\n";
echo $moedas[5] . " moeda(s) de R$ 0.01\n";



?>