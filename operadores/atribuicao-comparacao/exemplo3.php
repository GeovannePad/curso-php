<?php
//Operadores Aritméticos

    $a = 10;
    $b = 2;
    
    // Operador "+" irá somar as duas variáveis, com os valores 2 e 10, resultando em 12.
    echo $a + $b;
    echo "<br>";

    // Operador "-" irá subtrair as duas variáveis, no caso em ordem 10 - 2($a - $b), resultando em 8, mas também poderia ser 2 - 10($b - $a), resultando em -8.
    echo $a - $b;
    echo "<br>";

    // Operador "*" irá multiplicar as duas variáveis com valores 10 e 2, resultando em 20.
    echo $a * $b;
    echo "<br>";

    // Operador "/" irá dividir as duas variáveis com valores, respectivamente, 10 / 2 ($a / $b), resultando em 5, mas também poderia ser 2 / 10 ($b / $a), resultando em 0.2.
    echo $a / $b;
    echo "<br>"; // ou
    echo $b / $a;
    echo "<br>";

    // Operador "%" (módulo) irá dividir as duas varíaveis, porém ele vai dar preferência ao resto da divisão entre esses dois números, que são, respectivamente 10 / 2, a sobra dessa divisão será 0.
    echo $a % $b;
    echo "<br>";

    // Operador "**"(exponenciação) irá elevar a varíavel $b sobre a variável $a, resultando em 10² = 100.
    echo $a ** $b;