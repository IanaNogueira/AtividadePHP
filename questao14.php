<?php
/*Escreva um programa que calcule o salário semanal de um trabalhador. As
entradas são o número de horas trabalhadas na semana e o valor da hora. Até 40
h/semana não se acrescenta nenhum adicional. Acima de 40h e até 60h há um
bônus de 50% para essas horas adicionais. Acima de 60h há um bônus de 100%
para essas horas adicionais.*/

$h= 67;
$v= 20;

if ($h<=40){
    $s= $h*$v;
    echo"Seu salário é de $s";
}elseif($h>40 && $h<=60){
    $ad=$h-40;
    $b=$ad*0.50;
    $t= $b+($h*$v);
    echo"Seu salário é de $t, você ganhou um bonûs de $b";
}else{
    $ad=$h-40;
    $b=$ad*$v;
    $t= $b+($h*$v);
    echo"Seu salário é de $t, você ganhou um bonûs de $b";
}


?>