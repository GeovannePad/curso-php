<?php
  // Uma função anônima é uma função que não tem nome e nem return, só parâmetros.
  // callback é usado geralmente para um processo lento, que você não sabe quando o processo irá terminar.
  function test($callback){
    // Processo lento
    $callback();
  }

  test(function(){
    echo "Terminou";
  });