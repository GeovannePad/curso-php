<?php

  require_once("config.php");

  $sql = new Sql();

  $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

  $headers = array();

  // Pega os nomes das colunas da tabela usuarios.
  foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
  }

  // Abre o arquivo no modo escrita, caso não existir, ele cria.
  $file = fopen("usuarios.csv", "w+");

  fwrite($file, implode(",", $headers) . "\r\n");

  // Para cada linha do array usuarios. foreach nas linhas
  foreach ($usuarios as $row) {
    $data = array();
    // Vai pegar as informações de cada coluna e armazenar no array data. foreach nos campos
    foreach ($row as $key => $value) {
      array_push($data, $value);
    } // end foreach de coluna
    
    fwrite($file, implode(",", $data) . "\r\n");
  } // end foreach de linha

  // Arquivo csv é um arquivo formato
  // implode, espera 2 parâmetros, o primeiro, uma string, no caso, qual vai ser o separador dessas colunas, e segundo o array a ser formatado.

  fclose($file);