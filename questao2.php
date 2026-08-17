<?php 
/*02. Faça um algoritmo que leia três números inteiros, em seguida mostre o maior e 
menor deles.*/

$n1= 6;
$n2= 2;   
$n3= 9;

/*Descobrindo qual o maior número*/
if ($n1>=$n2 and $n1>=$n3) {
    $maior="$n1";
}elseif ($n2>=$n1 and $n2>=$n3) {
    $maior= "$n2";
} else {
    $maior= "$n3";
}

/*descobrindo qual o menor número*/
if ($n1<=$n2 and $n1<=$n3){
    $menor= "$n1";
} elseif ($n2<=$n1 and $n2<=$n3){
    $menor="$n2";
}else {
    $menor= "$n3";
}

echo ("O maior número é $maior e o menor é $menor")

?>