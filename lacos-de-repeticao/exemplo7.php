<?php

    $total = 150;
    $desconto = 0.9;

    // Caso for usar números no while, utilizar um contador/controle para não executar o while infinitamente.
    do {
        
        //Desconta 10% do $total.
        $total *= $desconto;
        //Neste caso enquanto o $valor for maior que 100 ele continuará a rodar o código entre as chaves {}, aplicando o desconto de 10% a cada vez que passar pelo código.
    } while ($total > 100);

    echo $total;