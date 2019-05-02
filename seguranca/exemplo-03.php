<?php

  // Permissões de pasta

  // As permissões vão de 0 a 7, 

  // Número 0 = Nenhuma permissão.

  // Número 1 = Permissão de execução.

  // Número 2 = Permissão de gravação.

  // Número 3 = Permissão de execução e gravação.

  // Número 4 = Permissão de leitura.

  // Número 5 = Permissão de leitura e execução.

  // Número 6 = Permissão de leitura e gravação.

  // Número 7 = Permissão total (leitura, gravação e execução). Cuidado!]

  // Os mais comuns é o 7 e 5.

  // O conjunto de permissões do UNIX segue uma regra de 3 números, por exemplo, "0765":
  // O primeiro número, no caso o 7, se refere ao dono(owner) que criou aquele diretório.
  // O segundo número, no caso o 6, se refere a grupos(groups).
  // O terceiro número, no caso o 5, se refere aos outros(others), os guests, os visitantes, no caso os usuários que acessam o site.

  $pasta = "arquivos";
  $permissao = "0775";

  if (!is_dir($pasta)) {
    mkdir($pasta, $permissao);
  }

  echo "Diretório criado com sucesso!";