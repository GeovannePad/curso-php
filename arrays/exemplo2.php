<?php

    //Array bidimensional forma antiga

    // Todos os carros que na primeira posição for 0 eu sei que é da montadora GM
    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";

    // Quando o final do array bidimensional for 0 ele estará falando da montadora de carros, e quando for diferente de zero ele estará se referindo a um modelo dessa respectiva montadora.

    // Todos os carros que na primeira posição for 1 eu sei que é da montadora Ford
    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";

    echo $carros[0][3];

    echo "<br>";

    // A função end serve para trazer o último valor desse array bidimensional, que no caso o valor 1 se refere apenas aos carros da montadora Ford.
    // Também serve para vetores (array de 1 dimensão)
    echo end($carros[1]);