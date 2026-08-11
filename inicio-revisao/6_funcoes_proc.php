<?php

//  Exemplo de função em php (Uma função sempre tem retorno)
function somar(float $a, float $b): float {
    return $a + $b;
}

//  Chamado a função
echo somar(4.5, 9.3);
echo "<br>";

// Exemplo de procedimento (Não tem return, pois não calcula)
function saudacao($nome = "Aluno") {
    echo "Olá, $nome! Seja bem vindo(a)!";
}


// Usando/exibindo (Procedimento)
saudacao("Maria Smart");
echo '<br>';
saudacao();