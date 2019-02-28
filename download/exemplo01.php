<?php

    // Download de arquivos com file_get_contents
    // Utilizar caso você deseje baixar um arquivo da internet ou necessite fazer uma cópia de um determinado arquivo via servidor. Basicamente fazer o download de um arquivo via servidor
    $link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";


    // Lê o conteúdo "bruto" binário do link em questão
    $content = file_get_contents($link);
    
    // parse_url interpreta o conteúdo "bruto" que está vindo, identificando o tipo do arquivo, e por fim transformando em um arquivo real.
    $parse = parse_url($link);

    // Pega o nome base da variável $parse na chave ["path"], que é o nome do arquivo.
    $basename = basename($parse["path"]);

    // Criar um arquivo novo, passando o $basename que é o nome do arquivo, e "w+" que cria um arquivo do zero caso ele não existir no diretório de destino.
    $file = fopen($basename, "w+");

    // Escreve dentro do arquivo $file criado anteriormente, no caso utilizando o conteúdo lido com o file_get_contents
    fwrite($file, $content);

    // Uma boa prática, sempre fechar o arquivo depois de qualquer mudança feita nele.
    fclose($file);

?>

<img src="<?=$basename?>" alt="">
    