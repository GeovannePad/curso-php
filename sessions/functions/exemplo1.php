<?php

    require_once ("../config.php");

    // Local onde está salvo o caminho para o arquivo da sessão atual
    echo session_save_path();

    echo "<br>";

    // Função usada para verificar o status atual da sessão. 
    var_dump(session_status());

    switch (session_status()) {
        case PHP_SESSION_DISABLED:
            echo " se as sessões estiverem desabilitadas";
            break;
        case PHP_SESSION_NONE:
            echo " se as sessões estiverem habilitadas, mas nenhuma existir";
            break;
        case PHP_SESSION_ACTIVE:
            echo " se as sessões estiverem habilitadas, e uma existir";
            break;
        default:
            # code...
            break;
    }
