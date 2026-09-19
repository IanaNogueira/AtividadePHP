<?php 
/*Escreva um script PHP que imprima na tela os números de 1 a 100. Porém:
Para múltiplos de 3, imprima a palavra "Eiiii" em vez do número.
Para múltiplos de 5, imprima a palavra "Acordaaaa" em vez do número.
Para números que são múltiplos de ambos (3 e 5), imprima "Eiiii Acordaaaa".
*/


for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "Eiiii Acordaaaa\n";
    } elseif ($i % 3 === 0) {
        echo "Eiiii\n";
    } elseif ($i % 5 === 0) {
        echo "Acordaaaa\n";
    } else {
        echo $i . "\n";
    }
}




