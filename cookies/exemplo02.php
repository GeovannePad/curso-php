<?php

  // Array super global que armazena todos os cookies do computador do usuário.
  // Pergunta se o cookie está setado.
  if (isset($_COOKIE["NOME_DO_COOKIE"])) {
    // Caso setado, ele irá transformar o json dentro do cookie em um objeto e armazenará na variável $obj.
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    // Imprime o atributo empresa.
    echo $obj->empresa;
  };