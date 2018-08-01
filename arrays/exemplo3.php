<?php

    // Array bidimensional forma nova

    $pessoas = array();

    // Função para inserir um novo item em um array, neste caso eu estaria inserindo um outro array dentro do array $pessoas já existente.
    // Neste caso, irá criar dois novos arrays dentro de um array principal
    // Este primeiro push irá inserir o primeiro array, que será identificado pelo índice [0]
    array_push($pessoas, array(
        'nome'=>'João',
        'idade'=> 20
    ));
    // Este segundo push irá inserir o segundo array, que será identificado pelo índice [1]
    array_push($pessoas, array(
        'nome'=>'Glaúcio',
        'idade'=>25
    ));

    echo "<pre>";
    // Neste print_r eu estou pedindo que me mostre apenas o nome da pessoa do array de índice 0 que está dentro do array principal $pessoas.
    // Neste caso o índice é 'nome', em vez de 0,1,2,etc..
    print_r($pessoas[0]['nome']);
    echo "</pre>";