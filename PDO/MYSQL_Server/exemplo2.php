<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

  // stmt = comando
  // Não precisa colocar apenas um comando, porém só trata o retorno do último comando que você mandou.
  $stmt = $conn -> prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN, :PASSWORD);");

  $login = "user";
  $password = "1234";

  // Liga cada parâmetro, com uma variável contendo um valor.
  $stmt -> bindParam(":LOGIN", $login);
  $stmt -> bindParam(":PASSWORD", $password);


  // Método para executar a query.
  $stmt -> execute();

  echo "Inserido com sucesso!";
