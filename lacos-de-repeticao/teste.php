<?php 

    $frase = "A repeticao e a mae da retencao.";
    $palavrainicial = "mae";
    $palavrafinal = "da";

    $posicaodapalavrafinal = strpos($frase, $palavrafinal);
    $posicaodapalavrainicial = strpos($frase, $palavrainicial);

    for ($i = $posicaodapalavrainicial; $i < $posicaodapalavrafinal + strlen($palavrafinal) ; $i++) { 
        
        echo "Na posição " . $i . " está a letra: " . "$frase[$i]";
        echo "<br>";
    }