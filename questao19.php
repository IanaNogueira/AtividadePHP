<?php /*Uma raposa está correndo por uma floresta e precisa atravessar uma área de 100 metros. 
Para correr com segurança, sua velocidade deve estar entre 10 km/h e 20 km/h.
Entretanto:
se estiver cansada, sua velocidade máxima é de 15 km/h;
se estiver chovendo, ela não pode correr a mais de 12 km/h.
O programa deve verificar se a velocidade da raposa está adequada às condições.*/

$cansada = true;
$chovendo = true;
$velocidade = 18;


$velocidade_maxima = 20;


if ($chovendo) {
    $velocidade_maxima = 12;
} elseif ($cansada) {
    $velocidade_maxima = 15;
}

if ($velocidade >= 10 && $velocidade <= $velocidade_maxima) {
    echo "A velocidade da raposa está adequada às condições.";
} else {
    echo "A velocidade da raposa não está adequada às condições.";
}
    

