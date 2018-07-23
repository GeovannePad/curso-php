<?php
//Operadores de comparação
    
    $a = 55.0;
    $b = 55;

    // Vai comparar a variável $a e $b, "perguntando" se a variável $a é maior que a $b, que no caso é falso, pois a variável $a vale 55 e a variável $b também vale 55.
    var_dump($a > $b);
    echo "<br>";

    //  Vai comparar a variável $a e $b, "perguntando" se a variável $b é maior que a $a, que no caso é falso, pois a variável $a vale 55.0 e a variável $b também vale 55. (55.0 == 55)
    var_dump($b > $a);
    echo "<br>";

    // dois iguais "==" vai comparar para ver a variavél $a é igual a $b, resultando em true, pois os valores dados a elas são iguais. Lembrando: apenas um "=" é considerado um operador de atribuição.
    var_dump($a == $b);
    echo "<br>";

    // Neste caso, não vai apenas comparar os valores, mas também o tipo da variável, nesse caso os valores podem ser iguais, mas os tipos são diferentes, resultando em false.
    // O porque disso é que a variável $a é do tipo ponto flutuante, um número decimal (55.0) e a variável $b é do tipo inteiro (55).
    var_dump($a === $b);
    echo "<br>";
    
    // Nesta situação, irá fazer a comparação da variável $a e da variável $b, "questionando" se ela são diferentes ou iguais, neste caso resultará em um false, pois nessa comparação
    // quando as varíáveis são iguais resultará em false, mas caso uma for diferente retornará true.
    var_dump($a != $b);
    echo "<br>";

    // Neste caso, ao "perguntar" se a variável $a é != de $b e levando também em consideração o tipo da variável, resultando em um true, pois mesmo os valores sendo iguais, os tipos são diferentes.
    var_dump($a !== $b);
?>