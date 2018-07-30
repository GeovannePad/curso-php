<?php

$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";

// Função para descobrir a posição de uma string, neste caso é a palavra "Mãe".
// Primeiro parâmetro é em qual variável está a string que você deseja utilizar para este processo.
// No segundo parâmetro é a palavra que você deseja procurar.
// Neste caso ele irá imprimir a posição que COMEÇA a palavra solicitada. Que no caso é int(19).
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";

//$texto = substr($frase, 0, $q);
//echo $texto;
//echo "<br>";

// Neste caso, a função substr irá mostrar pegar apenas uma parte da string, a parte de sua escolha, você que definirá onde começa e onde acaba.
// Primeiro parâmetro é em qual variável está a string que você deseja manipular.
// Segundo parâmetro é onde irá começar a pegar a sua string, que neste é caso é após da palavra mãe e mais 3 caracteres, pois a função strlen irá contar quantos caracteres existe na palavra mãe ($palavra)
// e somará junto com a variável $q que é igual a posição de início da palavra mãe.
// Terceiro parâmetro é aonde irá parar de "pegar" essa string, no caso, este é o valor final do intervalo selecionado. Que no caso irá contar quantos caracteres existe na variável $frase, com a função strlen
// para então fazer com que só pare no final da frase, pois irá armazenar na variável $frase a quantidade total de caractere presente na variável. Criando um intervalo.
$texto = substr($frase, $q + strlen($palavra), strlen($frase));
echo $texto;
echo "<br>";