<?php

    // Agora a sessão também está disponível nesta página
    require_once "config.php";

    // Do mesmo jeito que é criada, também pode ser chamada

    // Está função apaga todas as variáveis na sessão. Mas você ainda é identificado naquela página, já o session_destroy limpa as variáveis e meio que "explode" você, limpando sua identidade daquela sessão.
    //session_unset();
    echo $_SESSION["nome"];
    //session_destroy();
    echo $_SESSION["nome"];