<?php

  // Carrega classes automaticamente em um arquivo, sem precisar de um require.
  // Esta função vai receber de parâmetros todas as classes necessárias para tudo conseguir funcionar perfeitamente, você não precisa chamar essa função, ela meio que se chama sozinha ao dar o "new" algumaclasse.
  // Nesse caso é para classes na mesma pasta.
  function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
    var_dump($nomeClasse);
  }

  $carro = new DelRey();

  $carro -> acelerar(80);
