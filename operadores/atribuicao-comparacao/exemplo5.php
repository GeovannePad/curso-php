<?php
    // Space Ship, novo operador do PHP 7

    $a = 50;
    $b = 35;    

    // Este operador irá fazer uma comparação entre os dois números, por exemplo, nesta ordem do exemplo abaixo, o programa vai "perguntar" o seguinte, caso o $a for maior que $b, ele retornará int(1);
    // Outro resultado é se o $b for maior que $a, então ele resultará em int(-1);
    // e por último caso as duas variáveis forem iguais ele retornará int(0).  int = um número inteiro.
    var_dump($a <=> $b);


?>