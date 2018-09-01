<?php
  $fn = function($a){
    var_dump($a);
  };
  // No caso de armazenar a função anônima em uma variável, você deve chamar a função pelo nome da variável.
  $fn("Oi");