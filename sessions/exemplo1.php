<?php
    // Explicações mais detalhadas no arquivo aditional-info.md
    // Por padrão a sessão não vem iniciada no padrão
    require_once "config.php";
    // Com essa função, as sessões agora estão disponíveis/ativas NESTA PÁGINA.

    // Também é um array super-global
    // Entre os colchetes eu posso colocar o nome de uma variável de sessão que então eu posso atribuir um valor a ela.
    $_SESSION["nome"] = "HCode";

    