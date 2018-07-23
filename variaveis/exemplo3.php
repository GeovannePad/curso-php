<?php
//Tipos Básicos

//string (texto)
$nome = "HCode";
$site = 'www.hcode.com.br';

//variavel númerica inteira
$ano = 1994;

//ponto fluante (casa decimal)
$salario = 5500.99;

//variavel booleana (false)

$bloqueado = false;

////////////////////////////////////////////////////

//Tipos Compostos

// Variável armazenando um array
$frutas = array("Abacaxi", "Laranja", "Manga");

//mostrar a posição 2 do array, no caso "Manga"

echo $frutas[2];

//Objeto (Orientação a Objeto) se utiliza o "new"
$nascimento = new DateTime();

//var_dump($nascimento);

//////////////////////////////////////////////////////

//Tipos Especiais 

// Resource
$arquivo = fopen("exemplo3.php", "r");

//var_dump($arquivo);

//Nulo é a ausencia de valor, não existe, como ao destruir uma variável. E vazio só não tem informação, mas existe
$nulo = null;
$vazio = "";