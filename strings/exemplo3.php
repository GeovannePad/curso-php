<?php

$empresa = "HCode";

// Procura precisamente uma letra dentro de uma string, e alterá para qualquer string que você desejar.
// Função para alterar uma string para outra.
// Primeiro parâmetro é a letra/string que você deseja substituir.
// Segundo parâmetro é a letra/string que você deseja coloca no lugar da letra que você selecionou anteriormente.
// Terceiro parâmetro é para selecionar em qual variável ele fará esse processo.
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;