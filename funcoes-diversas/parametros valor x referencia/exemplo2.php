<?php
  // O & acessa o endereço de memória da variável em questão.
  $pessoa = array(
    'nome'=>'João',
    'idade'=>20
  );
  // O & fará com que quando passar pelo if e for verdadeira a pergunta dentro dele, neste caso, além de substituir o valor dentro do foreach ele também substituirá no array original ($pessoa).
  // Sem o & ele substituirá apenas por um momento dentro do foreach, não alternando o array original usado.
  foreach ($pessoa as &$value){
    // gettype, como o nome diz, serve para pegar o tipo da variável que está passando durante o foreach. 
    if (gettype($value) === 'integer') $value += 10;
    echo $value . "<br>";
  }

  print_r($pessoa);