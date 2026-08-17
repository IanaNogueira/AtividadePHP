<?php 
/* Faça um script em PHP que leia três números e mostre-os em ordem 
decrescente.*/

$n1= 3;
$n2= 7;
$n3= 8;

if ($n1<=$n2 and $n2<=$n3){
    echo"Os números em ordem decrescente são $n3, $n2, $n1";}
    elseif ($n1>=$n2 and $n2>=$n3){
    echo "Os números em ordem decrescente são $n1, $n2, $n3";}
    elseif ($n2>=$n1 and $n1>=$n3){
    echo"Os números em ordem decrescente são $n2, $n1, $n3";}
    elseif ($n2<=$n1 and $n1<=$n3){
    echo"Os números em ordem decrescente são $n3, $n1, $n2";}
    elseif ($n2>=$n3 and $n3>=$n1){
    echo"Os números em ordem decrescente são $n2, $n3, $n1";}
    elseif ($n1>=$n3 and $n3>=$n2){
    echo"Os números em ordem decrescente são $n1, $n3, $n2";}
    else {
    echo "Os números em ordem decrescente são $n3, $n2, $n1";
    }
    
?>