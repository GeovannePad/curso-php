<?php

  // Sessão antigo.
  session_start();

  // Código... 

  // Depois de verificar login e senha reinicie o ID da sessão.
  session_destroy();

  // Sessão nova, trocando o ID.
  session_start();

  // Código...

  // Gerando outro ID.
  session_regenerate_id();

  // Muda, apenas se fechar o navegador.
  echo session_id();
