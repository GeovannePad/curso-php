 <?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

  // Nunca esqueça do WHERE, pois alterará todos os valores da tabela
  $stmt = $conn -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

  $login = "Giovanni";
  $password = "9876";
  $id = 2;

  $stmt -> bindParam(":LOGIN", $login);
  $stmt -> bindParam(":PASSWORD", $password);
  $stmt -> bindParam(":ID", $id);

  $stmt -> execute();

  echo "Dados alterados com sucesso";