<?php

  // Função para definir quais erros você quer exibir, no caso está negando "~" as notices. Erro que está ocorrendo abaixo.
  // Bom usar quando você não tem controle sobre o ambiente que vai rodar o seu código.
  // É bom colocar essa função no arquivo de configurações globais do seu projeto, no caso, o config.php.
  error_reporting(E_ALL & ~E_NOTICE);
  $nome = $_GET["nome"];

  echo $nome;