<?php

  // O try e catch trata apenas exceptions, apesar dos erros do php 7 serem a maioria do tipo exception, ainda contém erros que não podem ser detectados pelo try e catch.
  // Neste caso você pode utilizar a function error_handler, que basicamente vai executar um bloco de código e caso descobrir algum erro, ela vai parar a execução do código e executar uma função determinada.
  // Warnings e notices você não consegue tratar dessa maneira, para isso você pode configurar no php.ini o que você quer que exiba ou não, ou pelo php mesmo (próximo exemplo).
  // Try e catch trata erros onde você o defini, já o handler é chamado quando ocorrer um erro não importa onde.
  // É bom colocar essa função no arquivo de configurações globais do seu projeto, no caso, o config.php.

  // Função error_handler (você pode dar qualquer nome a ela, mas esse é o melhor).
  function error_handler($code, $message, $file, $line){
    echo json_encode(array(
      'code'=>$code,
      'message'=>$message,
      'file'=>$file,
      'line'=>$line
    ));
  }

  // Seta a função que irá executar, caso aparecer um erro na execução do código.
  set_error_handler("error_handler");

  $total = 100 / 0;

