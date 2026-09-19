<?php /*15. Consumo de energia: A empresa de energia ENERGIA MÁXIMA utiliza a
seguinte tabela para calcular o valor da conta:
a. Até 100 kWh: R$ 0,50 por kWh;
b. De 101 até 200 kWh: R$ 0,70 por kWh;
c. De 201 até 300 kWh: R$ 0,90 por kWh;
d. Acima de 300 kWh: R$ 1,10 por kWh.
Faça um script em PHP que receba a quantidade de kWh consumidos e calcule o
valor da conta.
Ao final, informe:
● Consumo;
● Valor do kWh;
● Valor total da conta.*/ 

$kwh= 167;

if ($kwh<=100){
    $t= 0.5*$kwh;
    echo"
    CONSUM0= $kwh
    VALOR DO KWH= R$0,50
    VALOR TOTAL DA CONTA= $t";

}elseif ($kwh>=101 && $kwh<=200){
    $t= 0.7*$kwh;
    echo"
    CONSUM0= $kwh
    VALOR DO KWH= R$0,70
    VALOR TOTAL DA CONTA= $t";

}elseif ($kwh>=201 && $kwh<=300){
    $t= 0.9*$kwh;
    echo"
    CONSUM0= $kwh
    VALOR DO KWH= R$0,90
    VALOR TOTAL DA CONTA= $t";
}else{
     $t= 1.10*$kwh;
    echo"
    CONSUM0= $kwh
    VALOR DO KWH= R$1.10
    VALOR TOTAL DA CONTA= $t";
}

?>