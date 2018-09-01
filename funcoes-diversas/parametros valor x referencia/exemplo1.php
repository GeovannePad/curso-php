<?php
  // PASSAGEM DE PARÂMETRO POR VALOR, O PADRÃO!
  // Tudo que acontece na função fica na função.
  // Variável é uma coisa e parâmetro de função é totalmente diferente
  $a = 10;
  // Quando possuir o & está função está fazendo a passagem de parâmetro por referência, que é a mesma coisa da passagem por valor, porém é que ele enviará o valor obtido dentro da função para a variável
  // fora da função que está sendo inserida na mesma.
  // ALTERA O VALOR ANTIGO PELO NOVO QUE ESTÁ RETORNANDO DA FUNÇÃO UTILIZADA!
  // Neste caso o parâmetro $b = 60 e a variável $a também será igual a 60.
  function trocaValor(&$b){
    $b += 50;
    return $b;
  }
  // Neste primeiro echo, você estará enviando a variável $a para a função trocaValor($a) que a receberá como $b, e como a variável $a já valia 10 ao enviar para função ele somará + 50 e então retornará 60.
  echo trocaValor($a);
  echo "<br>";
  echo trocaValor($a);
  echo "<br>";
  // Já neste caso ele irá imprimir a variável $a, não passando por função alguma, por isso seu valor não é alterado, e se mantém em 10.
  // Mesmo conceito de ESCOPO de variáveis!
  echo $a;
  // No servidor, ao criar uma variável será alocado um espaço dedicado para ela, já o parâmetro e a função executa em uma outra área, por isso que ele não substitui o valor de $a por 60 e manterá o 10 anterior.