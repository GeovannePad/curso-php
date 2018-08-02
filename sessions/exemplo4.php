<?php

    // Recuperar um ID, no caso uma sessão que já está criada no servidor.
    session_id('42tlmg3bnc50grnnka93o6h1oq');
    require_once ("config.php");

    // Função que força a troca do ID da sessão atual.
    session_regenerate_id();

    echo session_id();

    var_dump ($_SESSION);