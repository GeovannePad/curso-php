<form method="POST" enctype="multipart/form-data">

  <input type="file" name="image">

  <button type="submit">Send</button>

</form>

<?php
  // "REQUEST_METHOD" é aonde guarda o tipo do método do form.
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Array superglobal, servindo para tratar arquivos. $_FILES
    $file = $_FILES["image"];
    var_dump($file);
    die();
    if ($file["error"]) {
      //Força um erro
      throw new Exception("Error: " . $file["error"]);
    }
    $dirUploads = "uploads";
    if (!is_dir($dirUploads)) {
      mkdir($dirUploads);
    }

    // "tmp_name" = diretório temporário e "name" = nome original da imagem
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
      echo "Upload realizado com sucesso!";
    } else {
      throw new Exception("Não foi possível realizar o upload");
    }
  }

?>