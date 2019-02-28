<?php

// Função rename() move ou renomeia um arquivo de uma pasta para outra. Ou então realiza os dois ao mesmo tempo
  $dir1 = "folder_01";
  $dir2 = "folder_02";
  
  // Pode utilizar sem chaves caso for apenas uma instrução.
  // is_dir no caso, pergunta se o diretório existe ou não dentro do local escolhido
  if(!is_dir($dir1)) mkdir($dir1);
  if(!is_dir($dir2)) mkdir($dir2);


  $filename = "README.txt";
  if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    // Processos de criação de um arquivo do zero, já explicado em sessões anteriores.
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
  }

  // No 1º parâmetro você deve colocar a origem do arquivo, no 2º parâmetro você deve colocar o destino desse arquivo, escolhendo ou não se ele deve mudar de nome.
  // Neste caso abaixo ele move o arquivo README.txt do folder_01 para o folder_02, alterando seu nome para README2.txt
  rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . "README2.txt");
  echo "Arquivo movido com sucesso";