<?php

// Irá incluir o arquivo exemplo1.php neste arquivo, é como se fosse um copiar o código do arquivo exemplo1.php para o arquivo exemplo2.php.
// Tomar cuidado com mensagens de erro, pois nem sempre o erro pode ser no arquivo que você está trabalhando, como também pode ser no arquivo vindo do include.

// O include tenta funcionar mesmo que o arquivo não exista ou esteja com algum problema, além de ter mais recursos.
// Há um diretório chamado include path, permitindo que o include traga arquivo de lá, que é configurado padrão no php. Caso o arquivo não exista na primeira busca ele busca nesse diretório.
// Apenas usar o include caso está pasta esteja configurada.
// O include remoto/dinâmico permite trazer um arquivo de um outro site (outro domínio), um comando muito perigoso. PÉSSIMA PRÁTICA, UTILIZAR API, POIS É MELHOR.
//include "inc/exemplo1.php";

// O require obriga que o arquivo existe e que também esteja funcionando corretamente, caso não estiver funcionamente ele virá uma exceção, para ser tratado. 
// Usar quando o include path não estiver definido.
require "inc/exemplo1.php";

// O require_once não deixa duplicidade de arquivos, caso estiver mais de um include do mesmo arquivo, ele ignora a segunda chamada do mesmo arquivo.
require_once "inc/exemplo1.php";

$resultado = somar (10, 20);
echo $resultado;