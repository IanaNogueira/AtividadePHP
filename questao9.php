<?php /*09. O Detetive: Faça um script que faça 5 perguntas para uma pessoa sobre um 
crime: 
a. "Telefonou para a vítima?" 
b. "Esteve no local do crime?" 
c. "Mora perto da vítima?" 
d. "Devia para a vítima?" 
e. "Já trabalhou com a vítima?" 
Classificação: 2 respostas SIM = "Suspeita", 3 ou 4 = "Cúmplice", 5 = 
"Assassino". Caso contrário, "Inocente". ?>*/

$a= 1;
$b=1;
$c=0;
$d=0;
$e=1;
$soma=$a+$b+$c+$d+$e;

if ($soma==5){
    echo"Você é o assassino";
}elseif ($soma==0){
    echo"Você é inocente";
}elseif($soma==2){
    echo"Você é suspeito";
}else{
    echo"você é cumplice";
}
