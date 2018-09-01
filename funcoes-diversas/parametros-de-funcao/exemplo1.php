<?php
    // Parâmetros são valores que você pode receber dentro de uma determinada função, que hora de chama-lá você deve colocar entre os parênteses os valores que serão usados, sempre separando-os por vírgula.
    // Os valores obrigatórios (tem que ser passados), no caso, os que não são passados valores padrão, como por exemplo essas duas variáveis abaixo. A $texto é um valor obrigatório, que não inicia com um valor padrão 
    // Já a $periodo tem um valor inicial, que no caso, é uma string, com o valor "Bom dia".
    // As variáveis obrigatórias sempre tem que estar para a esquerda dos parâmetros, no caso, sempre necessitam virem primeiro.
    // Os parâmetros também aceitam arrays!
  function ola($texto = "Mundo", $periodo){
    return "Olá $texto $periodo!<br>";
  }
  
  echo ola("mundo", "Bom dia");
  echo ola("", "Boa noite");
  echo ola("ola", "Boa tarde");
  echo ola("tchau", "");
