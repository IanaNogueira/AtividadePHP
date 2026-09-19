<?php /*16. Classificação de personagem: Em um jogo, os personagens possuem três
atributos: força, inteligência e agilidade. Faça um script em PHP que receba os
três atributos e determine a classe do personagem:
a. Se a força for o maior atributo: Guerreiro
b. Se a inteligência for o maior atributo: Mago
c. Se a agilidade for o maior atributo: Arqueiro
d. Se houver empate entre dois ou mais atributos: Classe híbrida
Exiba os três atributos e a classe escolhida.*/

$f= 3;
$i= 1;
$a=5;

if ($f>$i && $f>$a){
    echo"
    Seus atributos são: 
    FORÇA= $f
    INTELIGÊNCIA= $i
    AGILIDADE= $a 
    Sua classe é: GUERREIRO";
}elseif ($i>$f && $i>$a){
     echo"
    Seus atributos são: 
    FORÇA= $f
    INTELIGÊNCIA= $i
    AGILIDADE= $a 
    Sua classe é: MAGO";
}elseif ($a>$f && $a>$i){
     echo"
    Seus atributos são: 
    FORÇA= $f
    INTELIGÊNCIA= $i
    AGILIDADE= $a 
    Sua classe é: ARQUEIRO";
    }

?>