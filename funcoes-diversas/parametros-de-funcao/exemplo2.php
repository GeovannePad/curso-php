<?php
  // Função func_get_args verifica todos os parâmetros que estão sendo inseridos na função em que ela foi executada, e armazena todos em um array (variável $argumentos).
  // Sempre armazenar em uma variável esse array e usar var_dump para vê-lo melhor!
  function ola(){
    return $argumentos = func_get_args();
  }

  var_dump(ola("Bom dia", 10, 11.9, false, ""));