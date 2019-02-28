<?php

  // Como converter binário em base64.
  $filename = "gato.jpg";

  $base64 = base64_encode(file_get_contents($filename));

  // Pega o tipo do arquivo. 
  $fileinfo = new finfo(FILEINFO_MIME_TYPE);
  $mimetype = $fileinfo->file($filename);

  $base64encode = "data:$mimetype;base64," . $base64;

  ?>

  <a href="<?= $base64encode ?>" target="_blank"> Link para imagem</a>

  <img src="<?= $base64encode ?>" alt="gato">