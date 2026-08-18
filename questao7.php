<?php
/*07. Faça um algoritmo que tenha os 3 lados de um triângulo. O script deverá 
informar se os valores formam um triângulo. Se formarem, diga se é: Equilátero 
(3 lados iguais), Isósceles (2 lados iguais) ou Escaleno (3 lados diferentes).  */

$l1=3;
$l2=4;
$l3=5;

/*condição de existencia*/
if (($l1+$l2)>$l3 && (($l2+$l3)>$l1) && (($l1+$l3)>$l2)){{
    echo "As medidas forma um triângulo\n";
}
    if ($l1==$l2 && $l2==$l3){
    echo"É um triângulo Equilátero";
    }elseif($l1!=$l2 && $l2!=$l3 && $l3!=$l1){
    echo"É um triângulo Escaleno";
    }else{
    echo"É um triângulo isósceles";
}}

?>