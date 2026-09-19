<?php 
/*Elabore um programa para cálculo a ser pago por um produto, considerando o
preço normal de etiqueta e a escolha da condição de pagamento. Utilize os
códigos da tabela a seguir para ler qual a condição de pagamento escolhida e
efetuar o cálculo adequado.
Código Condição de pagamento:
1- À vista em dinheiro, recebe 10% de desconto;
2- À vista no cartão de crédito, recebe 5% de desconto;
3- Em 3 vezes no cartão, preço normal de etiqueta sem juros;
4- Em 6 vezes, preço normal de etiqueta mais juros de 10%.*/

$p = 15.60;
$c = "3 vezes no cartão";

if ($c == "À vista em dinheiro") {
    $d = $p * 0.10;
    $t = $p - $d;
    echo "você vai pagar $t reais";
}
elseif ($c == "À vista no cartão de crédito") {
    $d = $p * 0.05;
    $t = $p - $d;
    echo "você vai pagar $t reais";
}
elseif ($c == "3 vezes no cartão") {
    $pa = $p/3;
    echo "você vai pagar $p reais, com 3 parcelas de $pa";
}
else {
    $a = $p * 0.10;
    $t = $p + $a;
    $pa = $t/3;
    echo "você vai pagar $t reais, com 3 parcelas de $pa";
}





?>