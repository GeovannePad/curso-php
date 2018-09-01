<?php
  // DICA DO DIA: TENTE FAZER UM CÓDIGO CADA VEZ MAIS INTELIGENTE!!!!!
  // Toda função precisa retornar um valor, se não tiver um valor a ser retornado, não será considerado errado, mas ai ela será considerada uma sub-rotina (reutilzável, só executa algo).

  // function "nomedafuncao" ("parametros"){ "código que ela irá executar"}
  // Uma simples sub-rotina
  // Nesse caso ele não precisará de um echo no ola().
  function ola(){
    echo "Olá Mundo" . "<br>";
  }
  //ola();

  // Nesse caso, quando houver um return, você precisará de um echo na hora de chamar a função, para então imprimir a string da funcção abaixo.
  function ola2(){
    return "Olá Mundo" . "<br>";
  }
  // Caso retirar o echo ela não imprimirá nada.

  echo ola2();
  $frase = ola2();

  // Imprime a quantidade de caracteres na variável $frase.
  // Você ganha liberdade com o return, podendo fazer diversas coisas diferentes e inteligentes.
  echo strlen($frase);