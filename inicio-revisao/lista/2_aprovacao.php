<?php

// Variaveis
$media = 8.7;
$faltas = 15;

// SE/SENAO

if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno aprovado!";
} elseif ($media < 6.0 && $faltas > 15) {
    echo "Aluno reprovado!";
}