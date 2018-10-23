<?php

  // função fopen espera dois parâmetros, em sequência, o caminho e o que você quer fazer com esse arquivo (ler, modificar etc).
  // "w+" vai criar esse arquivo para escrever (write);
  //$file = fopen("log.txt", "w+");

  // Adiciona uma nova informação, mantendo o que já tinha antes dentro desse arquivo
  $file = fopen("log.txt", "a+");
  // A variável se torna do tipo resource, manipula conteúdo externo do php
  
  // fwrite, vai abrir o arquivo para editar/adicionar etc...
  fwrite($file, date("Y-m-d H:i:s " . "\r\n"));

  // fecha o arquivo, salvando-o.
  fclose($file);

  echo "Arquivo criado com sucesso!";