<?php 
/*10. Hipermercado QueroTudoQueÉSeu: Carnes em promoção. 
a. Filé Duplo: Até 5Kg (R$ 4,90/Kg) | Acima (R$ 5,80/Kg) 
b. Alcatra: Até 5Kg (R$ 5,90/Kg) | Acima (R$ 6,80/Kg) 
c. Picanha: Até 5Kg (R$ 6,90/Kg) | Acima (R$ 7,80/Kg) 
d. Cliente pode levar apenas um tipo. Cartão QueroTudoQueÉSeu dá 5% de 
desconto. Gere um cupom fiscal detalhado. */

$tipoCarne = "Picanha"; 
$quantidade = 6;        
$usaCartao = true;    

$precoKg = 0;

if ($tipoCarne == "File Duplo") {
    if ($quantidade <= 5) { $precoKg = 4.90; } else { $precoKg = 5.80; }
} elseif ($tipoCarne == "Alcatra") {
    if ($quantidade <= 5) { $precoKg = 5.90; } else { $precoKg = 6.80; }
} elseif ($tipoCarne == "Picanha") {
    if ($quantidade <= 5) { $precoKg = 6.90; } else { $precoKg = 7.80; }
}

$precoTotal = $quantidade * $precoKg;
$desconto = 0;

if ($usaCartao) {
    $desconto = $precoTotal * 0.05;
}

$valorPagar = $precoTotal - $desconto;

echo "--- CUPOM FISCAL ---\n";
echo "Tipo de Carne: $tipoCarne\n";
echo "Quantidade: $quantidade Kg\n";
echo "Preço Total: R$ $precoTotal\n";
echo "Cartão QueroTudoQueÉSeu: " . ($usaCartao ? "Sim" : "Não") . "\n";
echo "Desconto: R$ $desconto\n";
echo "Valor a Pagar: R$ $valorPagar\n";
?>











