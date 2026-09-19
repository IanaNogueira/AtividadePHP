<?php 

$p="renata";
$dia= "sexta";

if ($p=="israel" && ($dia=="quinta" || $dia=="sexta")){
    echo"Esse horário não está disponivel, Israel";
}elseif ($p=="israel" && $dia!="quinta" && $dia!="sexta"){
    echo"Esses horários estão disponíveis, Israel";}

if ($p=="renata" && ($dia=="segunda" || $dia=="terça")){
    echo"Esse horário não está disponivel, Renata";
}elseif ($p=="renata" && $dia!="segunda" && $dia!="terça"){
    echo"Esses horários estão disponíveis, Renata";}

?>