<?php

$nome = "HCode";
$nome2 = 'Treinamentos';

//var_dump($nome, $nome2);

// Interpolação de variáveis, recurso apenas do PHP.

// Nas aspas duplas ele verifica se há uma variável junto com uma string. Em vez de mostrar $nome, ele mostrará o valor contido em $nome.
echo "ABC $nome";

echo "<br>";

// Já em aspas simples ele identifica tudo como texto, até variáveis.
echo 'ABC $nome';

