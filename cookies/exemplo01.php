<?php

  // Cookie é um arquivo que fica gravado na máquina do usuário temporariamente, sendo obrigado estabelecer um tempo para então ser deletado.
  // O cookie não é deletado quando a máquina é desligada, tendo apenas, que estar dentro do tempo de expiração do cookie.
  // Cookie é persistente, mantém a informação mesmo se o usuário desligar a máquina.
  // É um arquivo físico que fica gravado tanto no servidor quanto na máquina do usuário.
  // Cookie é usado muito em re-marketing e E-Commerces.
  $data = array(
    "empresa"=>"HCode Treinamentos"
  );

  // Função para criar um cookie.
  // 1º parâmetro = nome do cookie.
  // 2º parâmetro = valor a ser armazenado no cookie (qualquer tipo de valor).
  // 3º parâmetro = tempo de expiração do cookie, usando o UNIX TIMESTAMP.
  setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

  echo "OK";