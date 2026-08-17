<?php 
/*04. As Empresas Israely’s resolveram dar um aumento de salário aos seus 
colaboradores. Faça um script que recebe o salário atual e calcula o reajuste: 
a. Salários até R$ 280,00 (incluindo): aumento de 20% 
b. Salários entre R$ 280,00 e R$ 700,00: aumento de 15% 
c. Salários entre R$ 700,00 e R$ 1500,00: aumento de 10% 
d. Salários de R$ 1500,00 em diante: aumento de 5% 
e. Após o cálculo, exiba o salário anterior, o percentual aplicado, o 
valor do aumento e o novo salário.*/


$atual = 800;

if ($atual <= 280) {
    $percentual = 20;
} elseif ($atual > 280 and $atual <= 700) {
    $percentual = 15;
} elseif ($atual > 700 and $atual <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $atual * ($percentual / 100);
$novo = $atual + $aumento;

echo "Seu antigo salário era $atual, o percentual aplicado foi de $percentual%,\n o aumento foi de $aumento e o novo salário é de $novo";







?>