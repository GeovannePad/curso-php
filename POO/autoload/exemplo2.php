<?php
  // SPL = Standard Php Library, conjuntos de funções nativas do php para facilitar lacunas, como essa. 

  function incluirClasses($nomeClasse){
    // Verifica se um arquivo existe. Se existir, chama ele num require_once.
    if(file_exists($nomeClasse . ".php")){
      require_once($nomeClasse . ".php");
    }
  }
  // Registra uma função como autoload.
  // Você pode definir várias spl.
  // Pode ser usada tanto quanto uma string e também uma função anônima.
  spl_autoload_register("incluirClasses");

  // Neste caso, a função irá pesquisar dentro da pasta Abstratas.
  spl_autoload_register(function($nomeClasse){
    // DIRECTORY_SEPARATOR, serve para saber qual barra é, por exemplo, no windows usa \ e no linux usa / . Com este "comando" o próprio php identifica sozinho.
    // Pesquisa o arquivo na pasta Abstratas\...
    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php")){
      require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }
  });

  $carro = new DelRey();

  $carro -> acelerar(80);