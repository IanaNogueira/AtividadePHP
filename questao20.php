<?php /*Mixxy-X789, um extraterrestre responsável pelo plantio de árvores em
 um planeta recém-descoberto, possui uma jornada de trabalho de 60 horas por dia, 
 durante 4 dias. Ao final dos 4 dias, o sistema deve calcular quantas horas extras
  Mixxy-X789 realizou.
A regra é:
Jornada normal: 60 horas por dia (o planeta de Mixxy-X789 tem 280 horas o dia);
Período de trabalho: 4 dias;
Para cada 1 hora extra trabalhada,  Mixxy-X789 recebe 1h30 hora de descanso;
Caso não realize horas extras, sua quantidade de descanso adicional será 0.*/

$h= 90;
$s= $h*4;

if ($s<=240){
    echo"Você trabalhou $s horas semanais e não teve descanso adicional";
}elseif($s>240){
    $extra= $s-240;
    $des= $extra*1.5;
    echo"Você trabalhou $s horas semanais, fez $extra horas adicionais e terá um descanso adicional de $des horas";
}






?>