<?php


    // Novidade do PHP, array constante
    // Caso queira que a constante seja case sensitive, é só colocar um segundo parâmetro com o valor true, mas não é uma boa prática, pois pode gerar conflitos com outras coisas.
    define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'teste'
    ], true);

    print_r(BANCO_DE_DADOS);