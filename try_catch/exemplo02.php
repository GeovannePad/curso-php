<?php

  // Erro em tempo de execução.

  // Função de exemplo
  function trataNome($name){
    
    if (!$name) {
      throw new Exception("Nenhum nome foi informado <br>", 1);
      
    }

    // ucfirst serve para colocar a primeira letra de uma string em maiuscula.
    echo ucfirst($name) . "<br>";
  }


  // Tenta executar o bloco primeiro, caso der erro irá cair no catch.
  try {
    trataNome("João");
    trataNome("");
    
    // Pega as informações do erro
  } catch (Exception $e) {
    echo $e->getMessage();

    // "Finalmente", ele sempre vai ser executado por último, independente do try e catch.
  } finally {
    echo "Executou o Try!";
  }