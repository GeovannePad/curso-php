<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

  // stmt = comando
  // Não precisa colocar apenas um comando, porém só trata o retorno do último comando que você mandou.
  // Nunca esqueça do WHERE.
  $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

  $id = 1;

  // Liga cada parâmetro, com uma variável contendo um valor.
  $stmt -> bindParam(":ID", $id);



  // Método para executar a query.
  $stmt -> execute();

  echo "Deletado com sucesso";
