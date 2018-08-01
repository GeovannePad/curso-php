<?php

    // Uma constante, diferente de uma variável comum, o valor dela não se altera, pelo menos na página em que ela foi criada
    // A função para se criar uma variável constante é a define(), onde:
    // O primeiro parâmento dentro dos parênteses, é o nome da variável, que por sinal, sempre é recomendado deixar o nome dela em uppercase (convensão).
    // O segundo parâmetro já é o valor atribuído a essa variável constante.
    // Sempre colocar entre parênteses
    define("SERVIDOR", "127.0.0.1");

    // Para ser chamada ela não precisa do $, apenas o seu nome.
    echo SERVIDOR;