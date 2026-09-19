<?php 
/*08. Sistema de Caixa Eletrônico: O script deverá receber o valor do saque e 
informar quantas notas de cada valor serão fornecidas. As notas disponíveis são: 
1, 5, 10, 50 e 100 reais. Valor mínimo de saque: 10 reais. Máximo: 600 reais. 
(Ex: Sacar 256 reais gera duas notas de 100, uma de 50, uma de 5 e uma de 1). */



$valor = 5;

if ($valor < 10 || $valor > 600) {
    echo "Valor inválido! O valor do saque deve ser entre R$ 10 e R$ 600.";
} else {
$n100 = intdiv($valor, 100);
$valor = $valor % 100;

$n50 = intdiv($valor, 50);
$valor = $valor % 50;

$n10 = intdiv($valor, 10);
$valor = $valor % 10;

$n5 = intdiv($valor, 5);
$valor = $valor % 5;

$n1 = $valor;

echo "Notas de 100: $n100\n";
echo "Notas de 50: $n50\n";
echo "Notas de 10: $n10\n";
echo "Notas de 5: $n5\n";
echo "Notas de 1: $n1\n";
}


?>