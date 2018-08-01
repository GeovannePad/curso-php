<?php
    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'João',
        'idade'=> 20
    ));
    array_push($pessoas, array(
        'nome'=>'Glaúcio',
        'idade'=>25
    ));

    echo "<pre>";
    print_r($pessoas[0]['nome']);
    echo "</pre>";

    // Função para transformar um array em JSON.
    // Quando tiveru um problema de acentuação, para resolver é preciso fazer uma conversão para UTF-8.
    echo json_encode($pessoas);

    