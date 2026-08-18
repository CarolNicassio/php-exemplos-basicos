<?php

// Vetor
$notas = [2.5, 9.8, 6.7, 8.5, 9];

// Variáveis
$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

// Exibir laço
foreach ($notas as $nota) {
    $soma += $nota;
if ($nota > $maior) $maior = $nota;
if ($nota < $menor) $menor = $nota;
}

// Calculando média
$media = $soma / count($notas);

echo "Média da turma: $media<br>";
echo "Maior nota: $maior<br>";
echo "Menor nota: $menor<br>";