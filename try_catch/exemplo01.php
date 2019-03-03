<?php

  // Try e Catch é utilizado para tratar erros de um bloco de código que é passível de erros, deixando uma solução pronto.
  // Provoca erros caso o usuário violar uma regra e em seguida você pode tratar esse erro.

  // Tudo que estiver dentro do bloco try ele vai tentar executar, caso estoure um erro ou uma exceção.
  try {
    
    // classe Expection("mensagem do erro", número do erro).
    throw new Exception("Houve um erro.", 400);

    // O que você quer capturar e de qual classe.
  } catch (Exception $e) {
    // Throw $e
    // Devolve um JSON com os dados do erro.
    echo json_encode(array(
      // Pega a mensagem do erro.
      "message"=>$e->getMessage(),
      // Pega a linha que ocorreu o erro.
      "line"=>$e->getLine(),
      // Pega o local do arquivo que ocorreu o erro.
      "file"=>$e->getFile(),
      // Pega o código do erro.
      "code"=>$e->getCode()
    ));
    // Sempre desenvolver em JSON para o front-end "consumir".
  }

   