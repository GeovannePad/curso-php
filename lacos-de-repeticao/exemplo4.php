<?php

    // Utiliza para percorrer arrays e coleções, "para cada item que exista dentro dessa variável, repita um detemrinado código".

    $meses = array(
        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro",
        "Outubro", "Novembro", "Dezembro"
    );

    foreach ($meses as $index => $mes)  {
        echo "O mês é: " . $mes . "[$index]" . "<br>";
    }