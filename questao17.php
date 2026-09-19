
<?php
/*Sudoku do Dragão 
O dragão precisa completar um desafio de Sudoku. Para isso, ele recebeu uma pequena malha com 
alguns números preenchidos e precisa verificar se pode colocar um novo número em uma determinada posição.
Considere a seguinte malha:
+---+---+---+
| 1 | 2 | 3 |
+---+---+---+
| 3 | 1 | 2 |
+---+---+---+
| 2 | 3 |   |
+---+---+---+
O programa deve verificar se o número escolhido já aparece na mesma linha ou na mesma coluna da posição escolhida.
Considere as seguintes regras:
O número deve estar entre 1 e 3;
O número não pode se repetir na mesma linha;
O número não pode se repetir na mesma coluna;
Caso o número não apareça na linha nem na coluna, a jogada é válida.*/


$a=1; $b=2; $c=3;
$d=3; $e=1; $f=2;
$g=2; $h=3; $i=0;

$numero = 2;

if ($numero < 1 || $numero > 3) {
    echo "Jogada inválida: O número deve ser 1, 2 ou 3.";
} 
elseif ($numero == $g || $numero == $h) {
    echo "Jogada inválida: O número $numero já existe na mesma linha.";
} 
elseif ($numero == $c || $numero == $f) {
    echo "Jogada inválida: O número $numero já existe na mesma coluna.";
} 
else {
    echo "Jogada válida! O número $numero pode ser colocado na posição.";
}

?>














?>