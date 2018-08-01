<?php

    //Exemplo de for errado, usado para derrubar um site ou servidor
    // O PHP não faz uma leitura intelígivel, ele só se importará com a sintaxe, caso ela estiver errado o código dará errado.
    for ($i=0; $i < 10; $i--) { 
        echo $i . " ";
    }