<?php

    // Pode vim por uma URL, arquivo, etc, puxado remotamente
    $json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Gla\u00facio","idade":25}]';

    // Utiliza o true para identificar que é um array e não um Objeto.
    // Caso não utilizar o true ele transforma em um objeto em vez de um array
    $data = json_decode($json, true);
                                                                                                                 
    var_dump($data);
    