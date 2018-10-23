<?php

  $filename = "usuarios.csv";

  if(file_exists($filename)){
    // "r" = read/leitura
    $file = fopen($filename, "r");
    // fgets pega só a primeira linha do arquivo.
    // Explode a string em um array, separando os valores do array pela vírgula.
    // Headers é aonde está os nomes das chaves.
    $headers = explode(",", fgets($file));

    $data = array();
    // var_dump($headers);

    while ($row = fgets($file)) {
      
      // Transformar os dados de cada coluna em um array.
      $rowData = explode(",", $row);

      // array linha para ser inserido no array data final
      $linha = array();
      for ($i=0; $i < count($headers); $i++) { 
        // Exemplo: $Linha["idusuario"] = "7"; pois $headers[0] = "idusuario" e $rowData[0] = "7".
        $linha[$headers[$i]] = $rowData[$i];
      }

      // No final dessa linha, ele vai atribui-la para o array data final, onde $data[0] vai ser uma linha e $data[1] outra, assim, sucessivamente.
      array_push($data, $linha);

    }
    fclose($file);
    echo json_encode($data);
  }
  