<?php
    // Null Coalescing, novo operador do PHP 7
    // Sua função é basicamente para compararar os valores nulos, comparando se os números são nulos ou não.
    // Evita uma mensagem de erro, dizendo que a variável não foi definida.

    $a = null;
    $b = null;
    $c = 10;

    echo $a ?? $b ?? $c;

?>