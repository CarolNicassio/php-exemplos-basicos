<?php

// Criação das variáveis
$preço = 100;
$quantidade = 3;

// Calculando valor da compra
$total = $preço * $quantidade;
$desconto = 0 ;
$final = 0;

// Desconto
if ($total >= 200) {
   $desconto = $total * 0.1;
   $final = $total - $desconto;
}; 

// Exibindo resultado
 echo "O valor da compra foi: $final reais";