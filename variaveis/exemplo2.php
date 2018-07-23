<?php
/*
$anoNascimento = 2001;
*/
$nomeCompleto = "Giovanni Padiha";
//Na linha de baixo temos uma variavel com numero no nome
$nome1 = "João";
$sobrenome = "Rangel";

//Utiliza a aspas sem nada no meio concatenada para aplicar um espaço entre palavras, e se utiliza o . (ponto) para concatenar variáveis
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;
// exit se utiliza para parar a execução do código, no caso não executa o código abaixo do exit
exit;

echo $nome1;

echo "<br/>";

//Elimina/destrui a variável
unset($nome1);

//Verificar se a variável existe com o comando isset
if(isset($nome1)){
    echo $nome1;
}

