<?php

// Registrando uma função anônima, como uma função mágica autoload.
  spl_autoload_register(function($nameClass){
    var_dump($nameClass);
    // Pasta onde está presente as classes.
    $dirClass = "class";
    // Caminho do arquivo.
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if(file_exists($filename)){
      require_once($filename);
    }
  });