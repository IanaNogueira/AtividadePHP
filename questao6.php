<?php

/*06. Faça um programa que lê duas notas parciais, calcule a média e aplique um 
conceito: A (9 a 10), B (7.5 a 9), C (6 a 7.5), D (4 a 6) e E (0 a 4). Imprima as 
notas, a média, o conceito e a mensagem “APROVADO” (se A, B ou C) ou 
“REPROVADO” (se D ou E).*/

$n1=9;
$n2=10;
$media= ($n1+$n2)/2;

if ($media>=9 and $media<=10){
echo"Suas notas são $n1 e $n2, o conceito é A, a média é $media. Parabéns, você foi aprovado!";}
elseif ($media>=7.5 and $media<9){
echo"Suas notas são $n1 e $n2, o conceito é B, a média é $media. Parabéns, você foi aprovado!";}
elseif ($media>=6 and $media<7.5){
echo"Suas notas são $n1 e $n2, o conceito é C, a média é $media. Parabéns, você foi aprovado!";}
elseif ($media>=4 and $media<6){
echo"Suas notas são $n1 e $n2, o conceito é D, a média é $media. Você foi reprovado!";}
elseif ($media>=0 and $media<6){
echo"Suas notas são $n1 e $n2, o conceito é E, a média é $media. Você foi reprovado!";}




















?>