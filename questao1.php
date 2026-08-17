<?php 
/*01. Faça um algoritmo que leia três números inteiros e mostre eles na ordem 
crescente. */

$a= 12;
$b= 9;
$c= 6;

if ($a<=$b and $a<=$c) {
    if ($b<=$c) {
        echo"Os números na ordem crescente são $a, $b, $c"; 
        }else {
            echo "Os números na ordem crescente são $a, $c, $b";
            }
        }
    elseif ($a>=$b and $a<=$c){
        if ($b<$c) {
            echo "Os números na ordem crescente são $b, $a, $c";
        }else { 
            echo"Os números na ordem crescente são $b, $c, $a";    
        }
    }elseif ($a<=$b) {
        echo "Os números na ordem crescente são $c, $a, $b";
        }else {
            echo "Os números na ordem crescente são $c, $b, $a";
        }
    
    
   
    




?>