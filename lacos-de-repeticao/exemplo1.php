<?php
    // Tomar cuidado com os loops infinitos,
    // for (valor inicial, pode ser qualquer nome de variável; condição final; incremento ou decremento)
    // Condição final seria igual até quando esse laço se repetirá.

    for ($i = 0; $i <= 1000; $i+=5) { 
        if ($i > 200 && $i < 800) continue; //Caso o if estiver só uma instrução você pode fazer assim o if, no caso o continue serve para ignorar a comparação atual.
        if ($i === 900) break; //Irá encerrar o for quando o $i chegar a 900.
        echo $i . "<br>";
    }

    