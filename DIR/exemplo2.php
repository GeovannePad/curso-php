<?php

  // LER E MANIPULAR PASTAS/DIRETÓRIOS COM O PHP
  
  // Função para escanear um diretório, retornando um array
  $images = scandir("images");

  $data = array();

  foreach ($images as $img) {
    // in array, procura algo dentro de um array, o 1º parâmetro é o array a ser procurado e o 2º parâmetro é o que deve ser procurado dentro desse array.
    if (!in_array($img, array(".", ".."))) {

      // filename é o local onde a imagem está.
      $filename = "images" . DIRECTORY_SEPARATOR . $img;

      // Pegar informações sobre o arquivo.
      $info = pathinfo($filename);

      // Função filesize é para "pegar" o tamanho do arquivo.
      $info["size"] = filesize($filename);

      // função filemtime é para ver quando o arquivo foi modificado pela última vez.
      $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

      // definir uma url para o arquivo, a função str_replace serve para ver se tem uma barra "\" (linux) e trocá-la para outro barra "/" (windows).
      $info["url"] = "http://localhost/curso-php/DIR/" . str_replace("\\", "/", $filename);

      // Inserir num array, as informações deste outro array
      array_push($data, $info);
    }
  }
  echo json_encode($data);
  //var_dump($images);