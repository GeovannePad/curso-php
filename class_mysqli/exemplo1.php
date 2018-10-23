<?php

  // Meio mais antigo de conexão com o banco de dados

  // Conectando ao banco, seguindo os parâmetros, (local_da_conexão/ip, usuário, senha, nome_do_banco).
  $conn = new mysqli("localhost", "root", "", "dbphp7");

  // Testando para ver se deu erro na coneção com o banco.
  if ($conn -> connect_error) {
    echo "Error: " . $conn->connect_error;
  }

  // Método para preparar uma query/comando para enviar pro banco de dados.
  // stmt = statement
  $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

  // Método para determinar os tipos de dados a serem inseridos e quais são eles, no caso do primeiro parâmetro,
  // usou-se "ss", que quer dizer, string e string, poderia ser também, "si", string e int. Já os outros são os valores a serem passados pro banco, considere a ordem certa -> user, senha.
  $stmt->bind_param("ss", $login, $pass);

  $login = "user";
  $pass = "12345";

  // Método execute, que executa a query preparada.
  $stmt -> execute();

  $login = "root";
  $pass = "!@#$";

  $stmt -> execute();