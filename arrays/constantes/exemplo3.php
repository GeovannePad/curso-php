<?php

    //Mostrar a versão do PHP que está rodando no seu atual PC
    echo PHP_VERSION;

    echo "<br>";

    // Constante para colocar a barra "\" invertida, pois na hora de desenvolver no windows e hospedar o site em um servidor linux, pode-se gerar conflitos por causa da barra
    // e ao utilizar está constante, você pode evitar esses erros e deixar o código mais inteligente.
    echo DIRECTORY_SEPARATOR;