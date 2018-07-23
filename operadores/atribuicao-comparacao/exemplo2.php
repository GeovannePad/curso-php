<?php
//Ainda em operadores de atribuição
// += -= *= são todos operadores de atribuição, porém são mais usados para valores numéricos, mas também podem ser usados para strings
    $valorTotal = 0;

    //Somar um determinado valor na própria variável
    // no caso somando 100 na variável $valorTotal
    $valorTotal += 100;

    // Somando mais 25 na variável $valorTotal
    $valorTotal += 25;

    // Subtraindo 10 da variável $valorTotal
    $valorTotal -= 10;

    // Pegando 90% ou 0.9 do valor atual da variável $valorTotal
    $valorTotal *= .9;
    
    echo $valorTotal;

?>