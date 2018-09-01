<?php
  // O int ...$valores, servirá para converter todos os parâmetros que estão sendo recebidos na função para inteiro e então armazenar num array ($valores), lembre-se que é necessário os "..." antes de declarar o array.
  // Já o ":string" serve para converter os valores para string (nesse caso) quando a função fizer o RETURN dos dados, mantendo os valores, porém trocando o tipo da variável.
  // Quando não se tem ":type" ele irá manter o tipo que está entrando na função, que neste caso é int(inteiro).
  function soma(int ...$valores):string{
    return array_sum($valores);
  }
  // var_dump trás informações mais detalhadas sobre uma variável/valor determinado.
  echo var_dump(soma(2,2));
  echo "<br>";
  echo soma(25,33);
  echo "<br>";
  echo soma(1.5,3.2);
  echo "<br>";
  