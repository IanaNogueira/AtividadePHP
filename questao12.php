<?php
/*O IMC – Índice de Massa Corporal é um critério da Organização Mundial de
Saúde para dar uma indicação sobre a condição de peso de uma pessoa adulta. A
fórmula é IMC = peso / ( altura )2. Elabore um programa que leia o peso e a
altura de um adulto e mostre sua condição de acordo com a tabela abaixo.*/

$p = 12.5;
$a = 1.80;
$o = $p/$a*2;

if ($o < 18.5) {
    echo "Você está abaixo do peso.";
}
elseif ($o > 18.5 and $o <= 25) {
    echo "Você está com peso normal.";
}
elseif ($o > 25 and $o <=30) {
    echo "Você está acima do peso.";
}
elseif ($o > 30 and $o <=40) {
    echo "Você está obeso.";
}
elseif ($o > 40) {
    echo "Você está com obesidade grave.";
}
?>