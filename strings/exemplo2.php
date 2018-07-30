<?php

$nome = "joão rangel";

// Dentro dos parenteses, é o local onde passa um argumento, no caso, uma variável.
// Função para colocar a string inteira para UPPERCASE, letra maiúscula.
$nome = strtoupper($nome);
echo $nome; 

echo "<br>";

// Função para colocar a string inteira para lowercase, letra minúscula.
$nome = strtolower($nome);
echo $nome;
echo "<br>";

//Converte todas as primeias letras de cada palavra da string para maiúscula.
echo ucwords($nome);
echo "<br>";

//Converte apenas a primeia letra da primeira palavra da string para maiúscula.
echo ucfirst($nome);

